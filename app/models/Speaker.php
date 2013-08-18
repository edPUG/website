<?php

class Speaker extends Eloquent {

	/**
	 * Validation rules
	 */
	public static $rules = array(
		'forename' => 'required',
		'surname'  => 'required',
	);
	
	public static $imagePaths = array(
		'original' => '/uploads/speakers/',
		'thumb'    => '/uploads/speakers/thumbs/'
	);
	
	public function talks() {
		return $this->belongsToMany('Talk');
	}
  
	public function getFullNameAttribute() {
		return $this->forename . ' ' . $this->surname;
	}
  
	function hasImage() {
		return (strlen(trim($this->image)));
	}

	function getImageUrl($variant = 'thumb') {
		
		if (!isset(self::$imagePaths[$variant])) return null;
		
		return self::$imagePaths[$variant] . $this->image;		
	}

}
