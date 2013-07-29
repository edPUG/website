<?php

class HomeController extends BaseController {

	public function showHomepage()
        {
		return View::make('home/homepage');
	}

}
