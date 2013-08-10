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
			$startDateTime = $meetup->getStartDateTime();
			$endDateTime = $meetup->getEndDateTime();
			$description = $meetup->getEventBriteDescription();
      $title = $meetup->title;

			$newEventParams = array(
					'title' => $title,
					'description' => $description,
					'start_date' => $startDateTime->format('Y-m-d H:i:s'),
					'end_date' => $endDateTime->format('Y-m-d H:i:s')
			);

			try{
				$response = $this->eventBriteApi->event_new($newEventParams);

        $eventId = $response->process->id;

				$meetup->eventbrite_id = $eventId;
				$meetup->save();
			
				return true;
			} catch(Exception $e) {
				throw $e;
			}

    }
    
		public function updateExistingEvent($meetup)
    {
			$this->createNewEvent($meetup);
			return true;
    }

    private function sendToEventbrite($meetup, $new)
    {

    }

}

