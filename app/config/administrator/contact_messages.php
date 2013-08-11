<?php

/**
 * Contact Messages model config
 */

return array(
	'title'      => 'Contact Messages',
	'single'     => 'Contact Message',
	'model'      => 'ContactMessage',
	'form_width' => 600,
	/**
	 * The display columns
	 */
	'columns' => array(
		'from_name'  => ['title' => 'From Name'],
		'from_email' => ['title' => 'From Email', 'type' => 'text'],
		'subject'    => ['title' => 'Subject', 'type' => 'text'],
		'created_at' => ['title' => 'Sent at', 'type' => 'datetime']		
	),
	
	/**
	 * Sorting
	 */
	'sort' => ['field' => 'created_at', 'direction' => 'desc'],
		
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'from_name'  => ['title' => 'From Name'],
		'from_email' => ['title' => 'From Email', 'type' => 'text'],
		'subject'    => ['title' => 'Subject', 'type' => 'text'],
		'message'    => ['title' => 'Message', 'type' => 'textarea']		
	),
	
	/**
	 * The filters
	 */
	'filters' => array(
		'from_name'  => ['title' => 'From Name'],
		'from_email' => ['title' => 'From Email', 'type' => 'text'],
		'subject'    => ['title' => 'Subject', 'type' => 'time'],
		'message'    => ['title' => 'Message', 'type' => 'textarea']		
	)
);