<?php

/**
 * Meetups model config
 */

return array(

	'title' => 'Talks',

	'single' => 'Talk',

	'model' => 'Talk',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'title' => array(
			'title' => 'Title',
		),
    'sort_order' => array(
			'title' => 'Sort Order',
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
    'meetup' => array(
    'type' => 'relationship',
    'title' => 'Meetup',
    'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
),
'speakers' => array(
    'type' => 'relationship',
    'title' => 'Speakers',
    'name_field' => 'forename', //using the getFullNameAttribute accessor
    'options_sort_field' => "CONCAT(forename, ' ' , surname)"
),
               
    'description' => array(
			'title' => 'Description',
                        'type' => 'wysiwyg',
		),
       
		'sort_order' => array(
			'title' => 'Sort Order',
                        'type' => 'number',
		)
            
		
	),

);