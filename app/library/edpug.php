<?php

class edPUG {

  public static function timeUntilNextMeetup(){
    $nextMeetup = new DateTime('third tuesday');
    $now = new DateTime();
    $internal = $nextMeetup->diff($now);

    $timeRemaining = $internal->format('%a days');

    if($timeRemaining == 1){
      $timeRemaining = $internal->format('%h hours, %i minutes');
    }

    return $timeRemaining;
    
  }

}
