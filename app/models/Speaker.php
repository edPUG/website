<?php

class Speaker extends Eloquent {

  public function talks() {
    return $this->belongsToMany('Talk');
  }

}
