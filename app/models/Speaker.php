<?php

class Speaker extends Eloquent {

	/**
	 * Validation rules
	 */
	public static $rules = array(
		'forename' => 'required',
		'surname'  => 'required',
	);
	
  public function talks() {
    return $this->belongsToMany('Talk');
  }
  
  public function getFullName() {
    return $this->forename . ' ' . $this->surname;
  }
  
}
