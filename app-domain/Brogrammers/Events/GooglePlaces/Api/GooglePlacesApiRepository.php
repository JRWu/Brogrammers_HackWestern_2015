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

    public function getCoordinates($address, $components = null)
    {
        $response = $this->apiClient->getCoordinates(array_filter([
            'address'    => $address,
            'components' => $components
        ]));

        if (!empty($response)
            && !empty($response['results'])
            && !empty($response['results'][0]['geometry'])
            && !empty($response['results'][0]['geometry']['location'])
        ) {
            $location = $response['results'][0]['geometry']['location'];

            $coordinates = [];
            $coordinates['location'] = $response['results'][0]['formatted_address'];
            $coordinates['latitude'] = $location['lat'];
            $coordinates['longitude'] = $location['lng'];

            return $coordinates;
        }

        return null;
    }
}