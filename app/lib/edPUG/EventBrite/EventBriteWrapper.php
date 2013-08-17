<?php 

namespace edPUG\EventBrite;

class EventBriteWrapper {

		private $eventBriteApi;

		public function __construct($eventBriteApi)
		{
			$this->eventBriteApi = $eventBriteApi;
		}

    public function createNewEvent($meetup)
    {
      if($meetup->active){
        $this->sendToEventbrite($meetup, true);
        $this->createNewTickets($meetup);
      } else {
        $this->throwNotActiveException();
      }
    }
    
    public function updateExistingEvent($meetup)
    {
      if($meetup->active){
        return $this->sendToEventbrite($meetup, false);
      } else {
        $this->throwNotActiveException();
      }
    }

    public function createNewTickets($meetup)
    {
      $numberOfTickets = \Config::get('eventbrite.number_of_tickets');
      $ticketName      = \Config::get('eventbrite.ticket_name');

      $ticketParams = array(
        'event_id'            => $meetup->eventbrite_id,
        'name'                => $ticketName,
        'price'               => '0.00',
        'quantity_available'  => $numberOfTickets
      );

      $response = $this->eventBriteApi->ticket_new($ticketParams);

      return true;
    }

    private function getFromEventbrite($meetup)
    {
      $existingEventParams = $this->eventBriteApi->event_get(['id' => $meetup->eventbrite_id]);
      if(property_exists($existingEventParams, 'error')) {
        $this->throwEventBriteException($existingEventParams->error);
      } else {
        return $existingEventParams;
      }
    }
    

    private function sendToEventbrite($meetup, $new)
    {
			$startDateTime = $meetup->getStartDateTime();
			$endDateTime = $meetup->getEndDateTime();
			$description = $meetup->getEventBriteDescription();
      $title = $meetup->getEventBriteTitle();
      $timeZone = date_default_timezone_get();
      $slug = $meetup->eventbrite_slug;

			$eventParams = array(
        'title'             => $title,
        'description'       => $description,
        'start_date'        => $startDateTime->format('Y-m-d H:i:s'),
        'end_date'          => $endDateTime->format('Y-m-d H:i:s'),
        'timezone'          => $timeZone
      );

      if ($new) {
        $eventParams['status'] = 'draft';
        $eventParams['personalized_url'] = $slug;
      } else {
        $currentEventParams = $this->getFromEventbrite($meetup);
        $currentEventBriteSlug = $this->getSlugFromUrl($currentEventParams);
        if (!$currentEventBriteSlug) {
          $eventParams['personalized_url'] = $slug;
        } elseif($currentEventBriteSlug != $slug) {
          $eventParams['personalized_url'] = $slug;
        }

        $eventParams['event_id'] = $meetup->eventbrite_id;
      }

      if($new) {
        $response = $this->eventBriteApi->event_new($eventParams);
      } else {
        $response = $this->eventBriteApi->event_update($eventParams);
      }

      $eventId = $response->process->id;

      $meetup->eventbrite_id = $eventId;
      $meetup->save();

      return true;
    }

    private function getSlugFromUrl($currentEventParams)
    {
      $url = $currentEventParams->event->url;
      $host = parse_url($url, PHP_URL_HOST);
      $hostParts = explode('.', $host);

      if($hostParts[0] == 'www'){
        return false;
      } else {
        return $hostParts[0];
      }
    }

    private function throwNotActiveException()
    {
      throw new \Exception('Meetup is not active');
    }

    private function throwEventBriteException($error = null)
    {
      if($error){
        throw new \Exception($error);
      } else {
        throw new \Exception('Eventbrite error');
      }
    }

}

