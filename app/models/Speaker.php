<?php

class Speaker extends Eloquent {

  public function talks() {
    return $this->belongsToMany('Talk');
  }
  
  public function getFullName() {
    return $this->forename . ' ' . $this->surname;
  }
  
}
