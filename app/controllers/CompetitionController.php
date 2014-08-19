<?php

class CompetitionController extends BaseController {

    public function getEntriesJson()
    {

        $ids = array_filter(explode(',', Input::get('ids', '501713374896734209')));

        // one entry per user (speaker gets an extra entry via edpug twitter, or via possible query param)

        $entrants = array();

        foreach ($ids as $id) {

            $id = trim($id);

            if (!is_numeric($id)) {
                continue;
            }

            $results = Twitter::getRts($id, array('format' => 'array'));

            foreach ($results as $tweet) {

                // Switch out the normal image for a larger version
                foreach (array('png', 'jpg', 'jpeg', 'gif') as $fileExtension) {
                    $tweet['user']['profile_image_url'] = str_replace('_normal.' . $fileExtension, '_bigger.' . $fileExtension, $tweet['user']['profile_image_url']);
                }

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

        }

        return Response::json(array_values($entrants));
    }

}
?>
