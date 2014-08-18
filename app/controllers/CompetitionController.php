<?php

class CompetitionController extends BaseController {

	public function getEntriesJson()
	{
		$handle   = 'edpug';
		$testMode = (bool) Input::get('test', false);
		$hashtag = Input::get('hashtag', strtolower(date('My')) . 'comp');

		$searchQuery = $testMode ? "@{$handle}" : "@{$handle} #{$hashtag}";

		$results = Twitter::getSearch(array('q' => $searchQuery, 'format' => 'array'));

		// one entry per user (speaker gets an extra entry via edpug twitter, or via possible query param)

		$entrants = array();

		foreach ($results['statuses'] as $tweet) {

			// is this a retweet? don't consider it
			if ($tweet['retweeted']) {
				continue;
			}

			// user must be following edpug!
			if (!$testMode && !$tweet['user']['following']) {
				continue;
      }

      //Switch out the normal image for a larger version
      $tweet['user']['profile_image_url'] = str_replace('_normal.png', '.png', $tweet['user']['profile_image_url']);

			// grab only certain values from the returned data
			// and group by screen name to remove duplicates

			$entrants[$tweet['user']['screen_name']] = array_intersect_key(
				$tweet['user'],
				array_flip(array('name', 'screen_name', 'profile_image_url'))
			) + array_intersect_key(
				$tweet,
				array_flip(array('text', 'source', 'created_at'))
			);

		}
		return Response::json(array_values($entrants));
    }

}
?>
