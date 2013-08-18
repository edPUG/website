<?php

/**
 * Meetups model config
 */

return array(

	'title'  => 'Users',
	'single' => 'User',
	'model'  => 'User',

	/**
	 * The display columns
	 */
	'columns' => array(
		'username' => ['title' => 'Username'],
		'email'    => ['title' => 'Email Address'],
		'is_admin' => ['title' => 'edPUG Admin?', 'type' => 'bool'],
	),
	
	/**
	 * Sorting
	 */
	'sort' => ['field' => 'username', 'direction' => 'asc'],

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'username'              => ['title' => 'Username'],
		'email'                 => ['title' => 'Email Address'],
		'password'              => ['title' => 'Password'],
		'password_confirmation' => ['title' => 'Confirm Password'],
		'is_admin'              => ['title' => 'edPUG Admin?', 'type' => 'bool'],  		
	),
	
	/**
	 * The filters
	 */
	'filters' => array(
		'username' => ['title' => 'Username'],
		'email'    => ['title' => 'Email Address']
	),
);