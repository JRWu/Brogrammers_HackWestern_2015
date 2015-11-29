<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:55 AM
 */

namespace IntegrationTests\Brogrammers\Events\Eventful\Api;

use Brogrammers\Events\Eventful\Api\EventfulApiRepository;
use TestCase;

class EventfulApiRepositoryIT extends TestCase
{
    /**
     * @var EventfulApiRepository
     */
    private $apiRepository;

    public function setUp()
    {
        parent::setUp();

        $this->apiRepository = $this->app[EventfulApiRepository::class];
    }

    /**
     * @test
     */
    public function it_gets_events_by_keyword()
    {
        $result = $this->apiRepository->getEvents('London, Ontario, Canada', 'concert');

        $this->assertNotEmpty($result);
    }

    /**
     * @test
     */
    public function it_gets_venues_by_keyword()
    {
        $result = $this->apiRepository->getVenues('London, Ontario');

        $this->assertNotEmpty($result);
    }
}