<?php

class Talk extends Eloquent {

  public function meetup()
  {
    return $this->belongsTo('Meetup');
  }
  
  public function speakers()
  {
    return $this->belongsToMany('Speaker');
  }
  
  
}
