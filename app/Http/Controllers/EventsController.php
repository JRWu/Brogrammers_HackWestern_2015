<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Brogrammers\Events\GooglePlaces\Api\GooglePlacesApiRepository;
use Brogrammers\Events\LogicEngine\EventLogicEngine;
use Brogrammers\Events\LogicEngine\EventQuery;
use Brogrammers\Events\LogicEngine\EventQueryBuilder;
use Input;

class EventsController extends Controller
{
    /**
     * @var EventLogicEngine
     */
    protected $logicEngine;

    public function __construct(
        EventLogicEngine $logicEngine,
        GooglePlacesApiRepository $googlePlaces
    ) {
        $this->logicEngine = $logicEngine;
        $this->google = $googlePlaces;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEvents()
    {
        $input = $this->createCategoriesArray(Input::all());
        $query = (new EventQueryBuilder($input))->buildQuery();
        $results = $this->logicEngine->findEventsNearby($query);

        return view('results', ['events' => $results]);
    }

    private function createCategoriesArray(array $input)
    {
        $array = [];

        $array['location'] = $this->google->getCoordinates($input['location']);
        $array['categories'] = [];
        foreach ($input as $key => $value) {
            if (in_array($key, EventQuery::GOOGLE_TYPES)
                || in_array($key, EventQuery::EXTERNAL_TYPES)
                || in_array($key, EventQuery::EVENTFUL_TYPES)
            ) {
                $array['categories'][$key] = $value;
            }
        }

        return $array;
    }
}
