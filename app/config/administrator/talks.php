<?php

/**
 * Talks model config
 */

return array(
	'title'      => 'Talks',
	'single'     => 'Talk',
	'model'      => 'Talk',
	'form_width' => 800,
	
	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'title'      => ['title' => 'Title'],
		'meetup'     => ['title' => 'Meetup', 'relationship' => 'meetup', 'select' => '(:table).title'],
		'sort_order' => ['title' => 'Sort Order']
	),
	
	/**
	 * Sorting
	 */
	'sort' => ['field' => 'id', 'direction' => 'desc'],
	
	
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'title'       => ['title' => 'Title', 'type' => 'text'],
		'meetup'      => ['type' => 'relationship', 'title' => 'Meetup', 'name_field' => 'title'],
		'speakers'    => ['type' => 'relationship', 'title' => 'Speakers', 'name_field' => 'forename', 
		                 'options_sort_field' => "CONCAT(forename, ' ' , surname)"],
		'description' => ['title' => 'Description', 'type' => 'wysiwyg'],
		'sort_order' => ['title' => 'Sort Order', 'type' => 'number']		
	),
	
	/**
	 * The filters
	 */
	'filters' => array(
		'title'       => ['title' => 'Title', 'type' => 'text'],
		'meetup'      => ['type' => 'relationship', 'title' => 'Meetup', 'name_field' => 'title'],
		'speakers'    => ['type' => 'relationship', 'title' => 'Speakers', 'name_field' => 'forename', 
		                 'options_sort_field' => "CONCAT(forename, ' ' , surname)"],
		'description' => ['title' => 'Description', 'type' => 'text']	
	),
	
);