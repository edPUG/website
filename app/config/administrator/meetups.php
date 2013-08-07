<?php

/**
 * Meetups model config
 */

return array(

	'title' => 'Meetups',

	'single' => 'Meetup',

	'model' => 'Meetup',

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