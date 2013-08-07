<?php

namespace edPUG\Helpers;

class DateHelper {

  public static function timeUntilNextMeetup(){
    $nextMeetup = \Meetup::getNextMeetup()->getStartDateTime();
    $now = new \DateTime();
    $difference = $nextMeetup->diff($now);

    $timeRemaining = $difference->format('%a days');

    if($difference->format('%a') <= 1){
      $timeRemaining = $difference->format('%h hours, %i minutes');
    }

    return $timeRemaining;
    
  }

}
