<?php

class HomeController extends BaseController {
    
	public function showHomepage()
	{
		return View::make('home/homepage')
			->with('next_meetup', Meetup::getNextActiveMeetup())
			->with('contact', new ContactMessage())
		;
    }

    public function speakers()
    {
        return View::make('speakers/speakers');
    }

    /**
     * Handling POST requests to /contact-form-ajax
     * 
     * @return null
     */
    public function contactFormEndpoint()
	{
		
		sleep(2); // make the user think the site is working hard to send their message :o)
		
        $newContact = new ContactMessage();
		
        $newContact->from_name  = Input::get('name');
        $newContact->from_email = Input::get('email');
        $newContact->message    = Input::get('message');
        
		$newContact->save();
        
		// send the sender a confirmation
		Mail::send(['text' => 'emails.contact.sender_copy'], ['msg' => $newContact], function($message) use ($newContact)
		{
			$message
				->to($newContact->from_email, $newContact->from_name)
				->subject('Thank you for contacting edPUG');
		});
		
		$admins = User::getAdminEmailNameArray();
			
		if (count($admins)) {
			Mail::send(['text' => 'emails.contact.edpug_copy'], ['msg' => $newContact], function($message) use ($newContact, $admins)
		{
			$message
				->subject(sprintf('New edPUG Contact message from %s', $newContact->from_name))
				->replyTo($newContact->from_email, $newContact->from_name);
			
			foreach ($admins as $email => $name) {					
				$message->addTo($email, $name);
			}
			
		});
		}

		return Response::json(
            array(
                'status'  => 200, 
                'message' => sprintf('Thank you %s. Your message has been received by the edPUG organisers and you should receive a reply soon.', htmlentities($newContact->from_name))
            )
        );
        
    }
}
