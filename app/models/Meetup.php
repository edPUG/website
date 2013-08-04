<?php

class Meetup extends Eloquent {
  

	public static function getNextMeetup() {
    
    $meetup = Meetup::whereRaw('TO_DAYS(start_date) - TO_DAYS(NOW()) >= 0')
                ->orderBy('start_date', 'ASC')
                ->first();
     
    return $meetup;

  }


  public function talks() {
    return $this->hasMany('Talk');
  }
  
  public function videos() {
    return $this->hasMany('Video');
  }
  
  public function getLongStartDateTimeAttribute() {
		return $this->getStartDateTime()->format('D jS F Y g:ia');
  }

	public function getStartDateTime() {
		$startDateTime = new \DateTime($this->start_date . ' ' . $this->start_time);
		return $startDateTime;
	}
  
	public function getLongEndDateTimeAttribute() {
		return $this->getEndDateTime()->format('D jS F Y g:ia');
	}

	public function getEndDateTime() {
		$endDateTime = $this->getStartDateTime();
		$endDateTime = $endDateTime->add(new DateInterval('PT'.$this->duration_minutes.'M'));
		return $endDateTime;
	}

	public function getAdminExistsOnEventBriteAttribute() {
		if($this->existsOnEventBrite()) {
			return 1;
		} else {
			return 0;
		}
	}

	public function existsOnEventBrite() {
		if($this->eventbrite_id){
			return true;
		} else {
			return false;
		}
	}
  
  
  
  
}
