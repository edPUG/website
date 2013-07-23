<?php

class Meetup extends Eloquent {

  public function talks() {
    return $this->hasMany('Talk');
  }
  
  public function videos() {
    return $this->hasMany('Video');
  }
  
}
