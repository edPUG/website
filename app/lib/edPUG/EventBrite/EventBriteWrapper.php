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

			exit;

			$newEventParams = array(
					'title' => 'My test event',
					'description' => 'testing event creation, remember not to set the privacy or visibility of test events to "public".',
					'start_date' => date('Y-m-d H:i:s', time() + (7 * 24 * 60 * 60)),
					'end_date' => date('Y-m-d H:i:s', time() + (7 * 24 * 60 * 60) + (2 * 60 * 60) )
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

}

