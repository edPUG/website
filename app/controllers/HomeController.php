<?php

class HomeController extends BaseController {

	public function showHomepage()
  {
		
    $nextMeetup = Meetup::getNextMeetup();
    
    return View::make('home/homepage', array('next_meetup' => $nextMeetup));
	}

}
