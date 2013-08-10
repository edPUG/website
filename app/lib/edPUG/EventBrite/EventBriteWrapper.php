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
      $this->sendToEventbrite($meetup, true);
      $this->createNewTickets($meetup);
    }
    
    public function updateExistingEvent($meetup)
    {
      return $this->sendToEventbrite($meetup, false);
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
    

    private function sendToEventbrite($meetup, $new)
    {
			$startDateTime = $meetup->getStartDateTime();
			$endDateTime = $meetup->getEndDateTime();
			$description = $meetup->getEventBriteDescription();
      $title = $meetup->getEventBriteTitle();
      $timeZone = date_default_timezone_get();

			$eventParams = array(
        'title'       => $title,
        'description' => $description,
        'start_date'  => $startDateTime->format('Y-m-d H:i:s'),
        'end_date'    => $endDateTime->format('Y-m-d H:i:s'),
        'timezone'    => $timeZone
      );

      if($new) {
        $eventParams['status'] = 'draft';
      }

      if(!$new) {
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

}

