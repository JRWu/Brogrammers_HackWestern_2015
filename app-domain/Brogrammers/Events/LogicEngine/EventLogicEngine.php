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
use Carbon\Carbon;
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
                $eventResults[$query->category] = $this->getGoogleEvents($query);
            } elseif ($this->isEventfulRequest($query)) {
                $eventResults[$query->category] = $this->getEventfulEvents($query);
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
    private function isGoogleRequest(EventQuery $query)
    {
        return $query->type === EventQuery::GOOGLE_TYPE_QUERY || $query->type === EventQuery::GOOGLE_NAME_QUERY;
    }

    /**
     * @param EventQuery $query
     * @return EventResult
     */
    private function getGoogleEvents(EventQuery $query)
    {
        $locationString = $this->concatenateLocation($query);

        if ($query->type === EventQuery::GOOGLE_TYPE_QUERY) {
            return $this->executeGoogleTypeQuery($query, $locationString);
        } else {
            return $this->executeGoogleNameQuery($query, $locationString);
        }
    }

    /**
     * @param EventQuery $query
     * @return string
     */
    private function concatenateLocation(EventQuery $query)
    {
        return $query->location['latitude'] . ', ' . $query->location['longitude'];
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
            $result->image = $googleResult['icon'];
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
    private function isEventfulRequest($query)
    {
        return $query->type === EventQuery::EVENTFUL;
    }

    /**
     * @param $query
     * @return EventResult
     */
    private function getEventfulEvents($query)
    {
        $locationString = $this->concatenateLocation($query);

        return $this->executeEventfulQuery($query, $locationString);
    }

    /**
     * @param $query
     * @param $locationString
     * @return array
     */
    private function executeEventfulQuery($query, $locationString)
    {
        $response = $this->eventful->getEvents($locationString, $query->category);

        return $this->parseEventfulResponse($response);
    }

    private function parseEventfulResponse($response)
    {
        $results = [];

        foreach ($response['events']['event'] as $event) {
            if ($this->isValidEvent($event)) {
                $result = new EventResult();
                $result->placeName = $event['title'];
                $result->description = $event['description'];
                $result->venueName = $event['venue_name'];
                $result->address = $event['venue_address'];
                $result->date = $event['start_time'];

                $results[] = $result;
            }
        }

        return $results;
    }

    private function isValidEvent($event)
    {
        $today = Carbon::now();
        $oneWeekLater = Carbon::createFromTimestamp($today->getTimestamp())->addWeek();
        $startDate = Carbon::createFromFormat('Y-m-d H:m:s', $event['start_time']);

        return ($startDate->gte($today) && $startDate->lte($oneWeekLater));
    }
}