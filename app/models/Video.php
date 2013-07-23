<?php

class Video extends Eloquent {

  public function meetup()
  {
    return $this->belongsTo('Meetup');
  }

}
