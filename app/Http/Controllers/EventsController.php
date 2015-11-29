<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Brogrammers\Events\GooglePlaces\Api\GooglePlacesApiRepository;
use Brogrammers\Events\LogicEngine\EventLogicEngine;
use Brogrammers\Events\LogicEngine\EventQuery;
use Brogrammers\Events\LogicEngine\EventQueryBuilder;
use Input;
use Redirect;

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
        if (empty(Input::get('location'))) {
            return Redirect::back();
        }

        $coordinates = $this->google->getCoordinates(Input::get('location'));
        $categories = $this->createCategoriesArray(Input::all());

        if (empty($categories['categories']) || empty($coordinates)) {
            return Redirect::back();
        }

        $location = $coordinates['location'];
        unset($coordinates['location']);

        $array = [];
        $array['location'] = $coordinates;

        $query = (new EventQueryBuilder(array_merge($categories, $array)))->buildQuery();
        $results = $this->logicEngine->findEventsNearby($query);

        return view('results', ['events' => $results, 'location' => $location]);
    }

    private function createCategoriesArray(array $input)
    {
        $array = [];

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
