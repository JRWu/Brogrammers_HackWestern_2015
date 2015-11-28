<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:55 AM
 */

namespace IntegrationTests\Brogrammers\Eventful\Api;

use Brogrammers\Eventful\Api\EventfulApiRepository;
use TestCase;

class EventApiRepositoryIT extends TestCase
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
        $result = $this->apiRepository->getEvents('London, Canada, CAN, CA, Ontario');

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