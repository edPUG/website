<?php

/**
 * Speakers model config
 
 The optional sizes option lets you define as many resizes as you want. The format for these is: array([width], [height], [method], [save path], [quality]). The different methods are exact, portrait, landscape, fit, auto, and crop.
 
 */

return array(

	'title' => 'Speakers',

	'single' => 'Speaker',

	'model' => 'Speaker',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'forename' => array(
			'forename' => 'Forename',
		),
   	'surname' => array(
			'surname' => 'Forename',
		),	
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'forename' => array(
			'forename' => 'Forename',
      'type' => 'text'
		),
   	'surname' => array(
			'surname' => 'Forename',
      'type' => 'text'
		),	
    'bio' => array(
			'bio' => 'Bio',
      'type' => 'wysiwyg'
		),	
    'image' => array(
    'title' => 'Image',
    'type' => 'image',
    'location' => public_path() . '/uploads/speakers/originals/',
    'naming' => 'keep',
    'length' => 20,
    'size_limit' => 2,
    'sizes' => array(
        array(65, 57, 'crop', public_path() . '/uploads/speakers/thumbs/small/', 100),
        array(220, 138, 'landscape', public_path() . '/uploads/speakers/thumbs/medium/', 100),
        array(383, 276, 'fit', public_path() . '/uploads/speakers/thumbs/full/', 100)
    ))   
		
	),

);