<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:59 AM
 */

namespace Brogrammers\Events\GooglePlaces\Api;

use Brogrammers\Common\Api\AbstractApiRepository;

class GooglePlacesApiRepository extends AbstractApiRepository
{
    const DEFAULT_PLACE_RADIUS = 20000;

    public function __construct(GooglePlacesApiClient $apiClient)
    {
        parent::__construct($apiClient);
    }

    public function getPlaces($location, $types = null, $name = null)
    {
        $request = [];
        $request['location'] = $location;
        $request['radius'] = self::DEFAULT_PLACE_RADIUS;
        $request['types'] = $types;
        $request['name'] = $name;

        return $this->apiClient->getEvents(array_filter($request));
    }

    public function getPlaceDetails($placeid)
    {
        return $this->apiClient->getEventDetails([
            'placeid' => $placeid
        ]);
    }
}