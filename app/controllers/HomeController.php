<?php

class HomeController extends BaseController {
    
	public function showHomepage()
    {
        $viewVars = array(
            'next_meetup' => Meetup::getNextActiveMeetup(),
            'contact' => new ContactMessage()
        );
    
        return View::make('home/homepage', $viewVars);
    }
       
    /**
     * Handling POST requests to /contact-form-ajax
     * 
     * @return null
     */
    public function contactFormEndpoint()
	{
		
		sleep(2); // we like spinners :o)
		
        $newContact = new ContactMessage();
		
        $newContact->from_name = Input::get('name');
        $newContact->from_email = Input::get('email');
        $newContact->message = Input::get('message');
        
		// $newContact->save();
        
		return Response::json(
            array(
                'status'  => 200, 
                'message' => sprintf('Thank you %s. Your message has been received by the edPUG organisers and you should receive a reply soon.', htmlentities($newContact->from_name))
            )
        );
        
    }
}
