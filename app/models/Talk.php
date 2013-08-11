<?php

class Talk extends Eloquent {

	/**
	 * Validation rules
	 */
	public static $rules = array(
		'title' => 'required',
	);

  public function meetup()
  {
    return $this->belongsTo('Meetup');
  }
  
  public function speakers()
  {
    return $this->belongsToMany('Speaker');
  }
  
  
}
