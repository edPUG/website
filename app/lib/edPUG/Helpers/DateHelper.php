<?php

namespace edPUG\Helpers;

class DateHelper {

  public static function timeUntilNextMeetup()
  {
    $difference = self::calculateDifference();
    if($difference->format('%a') <= 1){
      $timeRemaining = $difference->format('%h hours, %i minutes');
    } else {
      $difference = self::calculateDifference(true);
      $text = ($difference->format('%a') == 1 ? 'day' : 'days');
      $timeRemaining = $difference->format('%a '.$text);
    }

    return $timeRemaining;
    
  }

  private static function calculateDifference($daysOnly = false)
  {
    $nextMeetupDateTime = self::calculateDateTimeUtilNextMeetup();
    $now = new \DateTime();

    if($daysOnly){
      $nextMeetupDateTime->setTime(0, 0);
      $now->setTime(0, 0);
    }

    $difference = $nextMeetupDateTime->diff($now);

    return $difference;
  }

  public static function calculateDateTimeUtilNextMeetup()
  {
    $nextMeetup = \Meetup::getNextActiveMeetup();
    $now = new \DateTime();

    if($nextMeetup) {
      $nextMeetupDateTime = $nextMeetup->getStartDateTime();
      if($nextMeetup->getStartDateTime() < $now){
        $nextMeetupDateTime = self::getStaticNextMeetup();  
      }
    } else {
      $nextMeetupDateTime = self::getStaticNextMeetup();  
    }

    return $nextMeetupDateTime;
  }

  private static function getStaticNextMeetup()
  {
    $defaultStartDay    = \Config::get('edpug.day');
    $defaultStartTime   = \Config::get('edpug.time');
    $defaultRepetition  = \Config::get('edpug.day_repetition');
    $currentMonth = date('F');
    $now = new \DateTime();

    $defaultStartDateTime = new \DateTime($defaultRepetition. ' '. $defaultStartDay .' of '. $currentMonth);
    $defaultStartDateTime = new \DateTime($defaultStartDateTime->format('Y-m-d'). ' '. $defaultStartTime);

    if($now > $defaultStartDateTime){
      $month = date('F', strtotime('+1 months'));
    } else {
      $month = date('F');
    }

    $nextMeetupDateTime = new \DateTime($defaultRepetition. ' '. $defaultStartDay .' of '. $month);
    return $nextMeetupDateTime;
  }

}
