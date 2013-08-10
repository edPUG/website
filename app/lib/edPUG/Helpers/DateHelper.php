<?php

namespace edPUG\Helpers;

class DateHelper {

  public static function timeUntilNextMeetup()
  {

    $nextMeetupDateTime = self::calculateDateTimeUtilNextMeetup();

    $now = new \DateTime();
    $difference = $nextMeetupDateTime->diff($now);

    $timeRemaining = $difference->format('%a days');

    if($difference->format('%a') <= 1){
      $timeRemaining = $difference->format('%h hours, %i minutes');
    }

    return $timeRemaining;
    
  }

  public static function calculateDateTimeUtilNextMeetup()
  {
    $nextMeetup = \Meetup::getNextMeetup();
    $now = new \DateTime();
    $currentMonth = date('F');

    if($nextMeetup) {
      $nextMeetupDateTime = \Meetup::getNextMeetup()->getStartDateTime();
    } else {
      $defaultStartDay    = \Config::get('edpug.day');
      $defaultStartTime   = \Config::get('edpug.time');
      $defaultRepetition  = \Config::get('edpug.day_repetition');

      $defaultStartDateTime = new \DateTime($defaultRepetition. ' '. $defaultStartDay .' of '. $currentMonth);
      $defaultStartDateTime = new \DateTime($defaultStartDateTime->format('Y-m-d'). ' '. $defaultStartTime);

      if($now > $defaultStartDateTime){
        $month = date('F', strtotime('+1 months'));
      } else {
        $month = date('F');
      }

      $nextMeetupDateTime = new \DateTime($defaultRepetition. ' '. $defaultStartDay .' of '. $month);
    }

    return $nextMeetupDateTime;
  }

}
