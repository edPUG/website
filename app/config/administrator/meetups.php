<?php

/**
 * Meetups model config
 */

return array(

	'title'      => 'Meetups',
	'single'     => 'Meetup',
	'model'      => 'Meetup',
	'form_width' => 800,

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'title'                       => ['title' => 'Title'],
		'start_date'                  => ['title' => 'Start Date', 'type' => 'date'],
		'start_time'                  => ['title' => 'Start Time', 'type' => 'time'],
		'admin_exists_on_event_brite' => ['title' => 'Exists on EventBrite'],
		'active'                      => ['title' => 'Active', 'type' => 'bool']
		),

	/**
	 * Sorting
	 */
	'sort' => ['field' => 'start_date', 'direction' => 'desc'],
	
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'title'            => ['title' => 'Title', 'type' => 'text'],
		'eventbrite_id'    => ['title' => 'Eventbrite ID', 'type' => 'text'],
		'start_date'       => ['title' => 'Start Date', 'type' => 'date', 'date_format' => 'yy-mm-dd'],
		'start_time'       => ['title' => 'Start Time', 'type' => 'time'],
		'duration_minutes' => ['title' => 'Duration (minutes)', 'type' => 'number'],
		'description'      => ['title' => 'Description', 'type' => 'wysiwyg'],
		'resources'        => ['title' => 'Resources', 'type' => 'wysiwyg'],
		'active'           => ['title' => 'Active', 'type' => 'bool']
	),
	
	/**
	 * The filters
	 */
	'filters' => array(
		'title'            => ['title' => 'Title', 'type' => 'text'],
		'start_date'       => ['title' => 'Start Date', 'type' => 'date', 'date_format' => 'yy-mm-dd'],
		'description'      => ['title' => 'Description', 'type' => 'text'],
		'active'           => ['title' => 'Active', 'type' => 'bool']
	),
	
	/**
	 * The custom actions
	 */
	'actions' => array(
		'push_eventbrite' => array(
			'title' => 'Push to EventBrite',
			'messages' => array(
				'active'  => 'Pushing meetup to EventBrite...',
				'success' => 'Pushed meetup to EventBrite!',
				'error'   => 'There was an error while pushing the meetup',
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
        'eventbrite_slug' => array(
          'title' => 'Eventbrite Slug',
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
