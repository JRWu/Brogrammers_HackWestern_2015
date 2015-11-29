<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Brogrammers\Events\LogicEngine\EventLogicEngine;
use Brogrammers\Events\LogicEngine\EventQueryBuilder;
use Input;

class EventsController extends Controller
{
    /**
     * @var EventLogicEngine
     */
    protected $logicEngine;

    public function __construct(EventLogicEngine $logicEngine)
    {
        $this->logicEngine = $logicEngine;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEvents()
    {
        $input = Input::all();
        $query = (new EventQueryBuilder($input))->buildQuery();
        $results = $this->logicEngine->findEventsNearby($query);

        return view('results', ['events' => $results]);
    }
}
