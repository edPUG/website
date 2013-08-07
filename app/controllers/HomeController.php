<?php

class HomeController extends BaseController {
    public function showHomepage()
    {
        $viewVars = array(
            'next_meetup' => Meetup::getNextMeetup(),
            'contact' => new ContactMessage()
        );
    
        return View::make('home/homepage', $viewVars);
    }
    
    
    /**
     * Handling POST requests to /contact-form-ajax
     * 
     * @return null
     */
    public function contactFormEndpoint(){
        $newContact = new ContactMessage();
        $newContact->from_name = Input::get("name");
        $newContact->from_email = Input::get("email");
        $newContact->message = Input::get("message");
        $newContact->save();
        return Response::json(
            array(
                "status" => 100, 
                "message" => "sent succesfully"
            )
        );
        
    }
}
