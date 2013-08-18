<?php

/**
 * Speakers model config
 
 The optional sizes option lets you define as many resizes as you want.
 The format for these is:
   array([width], [height], [method], [save path], [quality]).
   The different methods are exact, portrait, landscape, fit, auto, and crop.
 
 */

return array(
	'title'      => 'Speakers',
	'single'     => 'Speaker',
	'model'      => 'Speaker',
	'form_width' => 600,
	
	/**
	 * The display columns
	 */
	'columns' => array(
		'forename' => ['title' => 'Forename'],
		'surname'  => ['title' => 'Surname'],
	),
	
	/**
	 * Sorting
	 */
	'sort' => ['field' => 'forename', 'direction' => 'asc'],
	
	
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'forename' => ['title' => 'Forename', 'type' => 'text'],
		'surname'  => ['title' => 'Surname', 'type' => 'text'],
		'bio'      => ['title' => 'Bio', 'type' => 'wysiwyg'],
		'image'    => array(
			'title'      => 'Image',
			'type'       => 'image',
			'location'   => public_path() . '/uploads/speakers/',
			'naming'     => 'keep',
			'length'     => 20,
			'size_limit' => 2, // MB
			'sizes' => array(
				[104, 104, 'crop', public_path() . '/uploads/speakers/thumbs/', 100],				
			)
		)
	),
	
	/**
	 * The filters
	 */
	'filters' => array(
		'forename' => ['title' => 'Forename', 'type' => 'text'],
		'surname'  => ['title' => 'Surname', 'type' => 'text'],
		'bio'      => ['title' => 'Bio', 'type' => 'text'],
	),
);