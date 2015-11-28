<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 5:04 PM
 */

namespace IntegrationTests\Brogrammers\Events\LogicEngine;


use Brogrammers\Events\LogicEngine\EventLogicEngine;
use Brogrammers\Events\LogicEngine\EventQuery;

class EventLogicEngineIT extends \TestCase
{
    const LOCATION = [
        'latitude'  => 42.9966006,
        'longitude' => -81.2779735
    ];

    /**
     * @var EventLogicEngine
     */
    protected $logicEngine;

    public function setUp()
    {
        parent::setUp();

        $this->logicEngine = $this->app[EventLogicEngine::class];
    }

    /** @test */
    public function it_gets_event_results_from_apis()
    {
        $eventQueries = [];
        $eventQueries[] = $this->createEvent('campground', 'family', EventQuery::GOOGLE_TYPE_QUERY);
        $eventQueries[] = $this->createEvent('sushi', 'family', EventQuery::GOOGLE_NAME_QUERY);

        $results = $this->logicEngine->findEventsNearby($eventQueries);

        $this->assertNotEmpty($results);
        $this->assertTrue(array_key_exists('campground', $results));
        $this->assertTrue(array_key_exists('sushi', $results));
    }

    private function createEvent($category, $dateType, $type)
    {
        $query = new EventQuery();

        $query->category = $category;
        $query->dateType = $dateType;
        $query->type = $type;
        $query->location = self::LOCATION;

        return $query;
    }
}