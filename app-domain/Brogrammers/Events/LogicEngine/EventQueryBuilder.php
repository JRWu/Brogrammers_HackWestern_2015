<?php
/**
 * Created by PhpStorm.
 * User: jwu
 * Date: 2015-11-28
 * Time: 5:15 AM
 */

namespace Brogrammers\Events\LogicEngine;

use Exception;


/**
 * Class EventQueryBuilder
 * @package Brogrammers\Events\LogicEngine
 */
class EventQueryBuilder
{
    const LOCATION = "location";
    const CATEGORIES = 'categories';
    const DATE_TYPE = 'dateType';

    /**
     * @var location describes how far the user is willing to travel for each activity
     */
    protected $location = [];

    /**
     * @var dateType describes what class of activity was picked (Fam/Friends/Partners)
     */
    protected $dateType;


    /**
     * @var array is the set of T/F values for categories being selected for
     */
    protected $categories = [];



    public function __construct(array $request)
    {
        $this->validateRequest($request);

        $this->dateType = 'type';
        $this->location = $request[self::LOCATION];
        // Fix the "location" label based on what S and V give us
        foreach ($request[self::CATEGORIES] as $key => $category) {    // Loops through the incoming categories
            $this->categories[$key] = $category;
        }
    }

    private function validateRequest($request)
    {
        $expectedKeys = [
            self::LOCATION,
            self::CATEGORIES
        ];

        foreach ($expectedKeys as $key) {
            if (!array_key_exists($key, $request) || empty($request[$key])) {
                throw new Exception('Missing expected keys: ' . $key);
            }
        }

        if(!array_key_exists("latitude", $request[self::LOCATION]) ||
            !array_key_exists("longitude", $request[self::LOCATION]))
        {
            throw new Exception('Missing Coordinates: ' . $request[self::LOCATION]);
        }
    }

    // checks t/f value of category

    public function buildQuery()
    {
        return $this->parseAndGenerateQueries();
    }

    /**
     * @return EventQuery[]
     * @throws Exception
     */
    private function parseAndGenerateQueries()
    {
        $filteredCategories = [];

        foreach ($this->categories as $key => $value) {
            if ((boolean)$value === true) {
                $filteredCategories[] = $this->translateCategories($key);
            }
        }

        return $filteredCategories;
    }

    // This takes the activities and translates them to places
    // How to differentiate
    private function translateCategories($category)
    {
        $eventQuery = new EventQuery();
        $eventQuery->dateType = $this->dateType;
        $eventQuery->category = $category;
        $eventQuery->location = $this->location;

        if (in_array($category, EventQuery::GOOGLE_TYPES)) {
            $eventQuery->type = EventQuery::GOOGLE_TYPE_QUERY;
        }
        elseif (in_array($category, EventQuery::EXTERNAL_TYPES)) {
            $eventQuery->type = EventQuery::GOOGLE_NAME_QUERY;
        }
        elseif (in_array($category, EventQuery::EVENTFUL_TYPES)) {
            $eventQuery->type = EventQuery::EVENTFUL;
        } else {
            throw new \Exception('Not a valid type');
        }

        return $eventQuery;
    }


}