<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:55 AM
 */

namespace IntegrationTests\Brogrammers\Events\GooglePlaces\Api;

use Brogrammers\Events\GooglePlaces\Api\GooglePlacesApiRepository;
use TestCase;

class GooglePlacesApiRepositoryIT extends TestCase
{
    /**
     * @var GooglePlacesApiRepository
     */
    private $apiRepository;

    public function setUp()
    {
        parent::setUp();

        $this->apiRepository = $this->app[GooglePlacesApiRepository::class];
    }

    /**
     * @test
     */
    public function it_gets_places_near_a_location()
    {
        $result = $this->apiRepository->getPlaces('42.9837, -81.2497', 'restaurant', 'fine');

        $this->assertNotEmpty($result);
    }

    /** @test */
    public function it_gets_place_details()
    {
        $result = $this->apiRepository->getPlaceDetails('ChIJsU9aYATyLogRuVJo26MCLkI');

        $this->assertNotEmpty($result);
    }

    /** @test */
    public function it_gets_coordinates_from_search()
    {
        $result = $this->apiRepository->getCoordinates('London, ON');

        $this->assertNotEmpty($result);
    }
}