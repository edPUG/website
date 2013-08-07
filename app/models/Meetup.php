<?php

class Meetup extends Eloquent {

  public function talks() {
    return $this->hasMany('Talk');
  }
  
  public function videos() {
    return $this->hasMany('Video');
  }
  
  public function getLongDateTime() {
     return date('D jS F Y g:ia', strtotime($this->start_date . ' ' . $this->start_time));
  }
  
  public static function getNextMeetup() {
    
    $meetup = Meetup::whereRaw('TO_DAYS(start_date) - TO_DAYS(NOW()) >= 0')
                ->orderBy('start_date', 'ASC')
                ->first();
     
    return $meetup;

  }
  
  
  
  
}
