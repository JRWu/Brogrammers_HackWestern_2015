<?php
/**
 * Created by PhpStorm.
 * User: jwu
 * Date: 2015-11-28
 * Time: 11:58 AM
 */

namespace Brogrammers\Events\LogicEngine;


use Brogrammers\Events\Eventful\Api\EventfulApiRepository;
use Brogrammers\Events\GooglePlaces\Api\GooglePlacesApiRepository;
use Exception;

class EventLogicEngine
{
    /**
     * @var GooglePlacesApiRepository
     */
    protected $googlePlaces;

    /**
     * @var EventfulApiRepository
     */
    protected $eventful;

    public function __construct(
        GooglePlacesApiRepository $googlePlaces,
        EventfulApiRepository $eventful
    ) {
        $this->googlePlaces = $googlePlaces;
        $this->eventful = $eventful;
    }

    public function findEventsNearby(array $eventQueries)
    {
        $this->assertArrayContainsEventQueries($eventQueries);

        $eventResults = [];
        foreach ($eventQueries as $query) {
            if ($this->isGoogleRequest($query)) {
                $eventResults[$query->category] = $this->getGoogleEvent($query);
            } elseif ($this->isEventfulRequest($query)) {
                $eventResults[$query->category] = $this->getEventfulEvent($query);
            }
        }

        return $eventResults;
    }

    private function assertArrayContainsEventQueries($types)
    {
        foreach ($types as $type) {
            if (!$type instanceof EventQuery) {
                throw new Exception(sprintf('%s is not a Event Query', $type));
            }
        }
    }

    /**
     * @param $query
     * @return bool
     */
    public function isGoogleRequest(EventQuery $query)
    {
        return $query->type === EventQuery::GOOGLE_TYPE_QUERY || $query->type === EventQuery::GOOGLE_NAME_QUERY;
    }

    /**
     * @param EventQuery $query
     * @return EventResult
     */
    private function getGoogleEvent(EventQuery $query)
    {
        $googleLocationString = $query->location['latitude'] . ', ' . $query->location['longitude'];

        if ($query->type === EventQuery::GOOGLE_TYPE_QUERY) {
            return $this->executeGoogleTypeQuery($query, $googleLocationString);
        } else {
            return $this->executeGoogleNameQuery($query, $googleLocationString);
        }
    }

    private function executeGoogleTypeQuery($query, $googleLocation)
    {
        $response = $this->googlePlaces->getPlaces($googleLocation, $query->category);

        return $this->parseGoogleResponse($response);
    }

    private function parseGoogleResponse($response)
    {
        $results = [];

        foreach ($response['results'] as $googleResult) {
            $result = new EventResult();
            $result->location = [
                'lat' => $googleResult['geometry']['location']['lat'],
                'lng' => $googleResult['geometry']['location']['lng']
            ];
            $result->placeName = $googleResult['name'];
            $result->icon = $googleResult['icon'];
            $result->address = $googleResult['vicinity'];
            if (array_key_exists('opening_hours', $googleResult) && !empty($googleResult['opening_hours'])) {
                $result->openNow = $googleResult['opening_hours']['open_now'];
            }
            $results[] = $result;
        }

        return $results;
    }

    private function executeGoogleNameQuery($query, $googleLocation)
    {
        $response = $this->googlePlaces->getPlaces($googleLocation, null, $query->category);

        return $this->parseGoogleResponse($response);
    }

    /**
     * @param $query
     * @return bool
     */
    public function isEventfulRequest($query)
    {
        return $query->type === EventQuery::EVENTFUL;
    }

    /**
     * @param $query
     * @return EventResult
     */
    private function getEventfulEvent($query)
    {
        $result = new EventResult();


        return $result;
    }
}