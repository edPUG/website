<?php 

namespace edPUG\EventBrite;

use Illuminate\Support\ServiceProvider;

class EventBriteServiceProvider extends ServiceProvider {

    public function register()
    {
			$app = $this->app;

			\App::bind('EventBrite', function($app)
			{
				$applicationKey = \Config::get('eventbrite.application_key');
				$userKey = \Config::get('eventbrite.user_key');

				$eventBrite = new EventBrite(array('app_key' => $applicationKey,
																					 'user_key' => $userKey));

				return new EventBriteWrapper($eventBrite);
			});
    }

}

