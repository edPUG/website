<?php

/**
 * Meetups model config
 */

return array(

		'title' => 'Meetups',

		'single' => 'Meetup',

		'model' => 'Meetup',

		'actions' => array(
			'push_eventbrite' => array(
				'title' => 'Push to EventBrite',
				'messages' => array(
					'active'	=> 'Pushing meetup to EventBrite...',
					'success' => 'Pushed meetup to EventBrite!',
					'error'		=> 'There was an error while pushing the meetup',
					),
				'action' => function($meetup)
				{
					$eventBrite = App::make('EventBrite');

					try {
						if($meetup){
							if($meetup->existsOnEventBrite()){
								$eventBrite->updateExistingEvent($meetup);
							} else {
								$eventBrite->createNewEvent($meetup);
							}
						} else {
							throw new Exception('Meetup could not be found.');
						}
						return true;
					} catch (Exception $e) {
						return $e->getMessage();
					}
				}
			),
		),

		/**
		 * The display columns
		 */
		'columns' => array(
			'id',
			'title' => array(
				'title' => 'Title',

				),
			'start_date' => array(
				'title' => 'Start Date',
				'type' => 'date',
				),
			'start_time' => array(
				'title' => 'Start Time',
				'type' => 'time',
				),
			'admin_exists_on_event_brite' => array(
				'title' => 'Exists on EventBrite',
			),
			'active' => array(
				'title' => 'Active',
				'type' => 'bool',
				)
			),

		/**
		 * The editable fields
		 */
		'edit_fields' => array(
				'title' => array(
					'title' => 'Title',
					'type' => 'text',
        ),
        'eventbrite_id' => array(
          'title' => 'Eventbrite ID',
          'type'  => 'text'
        ),
				'start_date' => array(
					'title' => 'Start Date',
					'type' => 'date',
					'date_format' => 'yy-mm-dd'
					),
				'start_time' => array(
					'title' => 'Start Time',
					'type' => 'time',
					),
				'duration_minutes' => array(
					'title' => 'Duration (minutes)',
					'type' => 'number',
					),
				'description' => array(
					'title' => 'Description',
					'type' => 'wysiwyg',
					),
				'resources' => array(
						'title' => 'Resources',
						'type' => 'wysiwyg',
						),
				'active' => array(
						'title' => 'Active',
						'type' => 'bool',
						)


				),

				);
