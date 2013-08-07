<?php

/**
 * Contact Messages model config
 */

return array(

	'title' => 'Contact Messages',

	'single' => 'Contact Message',

	'model' => 'ContactMessage',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'from_name' => array(
			'title' => 'From Name',

		),
		'from_email' => array(
			'title' => 'From Email',
                        'type' => 'text',
		),
		'subject' => array(
			'title' => 'Subject',
                        'type' => 'time',
		),
		'created_at' => array(
			'title' => 'Sent at',
                        'type' => 'datetime',
		)
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'from_name' => array(
			'title' => 'From Name',
                        'type'  => 'text'

		),
		'from_email' => array(
			'title' => 'From Email',
                        'type' => 'text',
		),
		'subject' => array(
			'title' => 'Subject',
                        'type' => 'text',
		),
		'message' => array(
			'title' => 'Message',
                        'type' => 'textarea',
		),
            		
	),
    'filters' => array(
        'from_name' => array(
			'title' => 'From Name',
                        'type'  => 'text'

		),
		'from_email' => array(
			'title' => 'From Email',
                        'type' => 'text',
		),
		'subject' => array(
			'title' => 'Subject',
                        'type' => 'text',
		),
		'message' => array(
			'title' => 'Message',
                        'type' => 'text',
		)
    )

);