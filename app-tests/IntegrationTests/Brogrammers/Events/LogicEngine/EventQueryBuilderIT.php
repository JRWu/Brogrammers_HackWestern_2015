<?php
/**
 * Created by PhpStorm.
 * User: jwu
 * Date: 2015-11-28
 * Time: 1:44 PM
 */

namespace IntegrationTests\Brogrammers\Events\LogicEngine;


use Brogrammers\Events\LogicEngine\EventQueryBuilder;
use TestCase;

class EventQueryBuilderIT extends TestCase
{

    /**
     * @test
     */
    public function it_parses_categories()
    {

        $dummyArray = array
        (
            "location" =>
                [
                    'Latitude' => 42.9966006,
                    'Longitude' => -81.2779735
                ],
            "dateType" => "family",
            "categories" =>
                [
                    'park' => FALSE,
                    'campground'=> TRUE,
                    'movie_theater'=> FALSE,
                    'museum'=> FALSE,
                    'restaurant'=> FALSE,
                    'spa'=> FALSE,
                    'cafe'=> FALSE,
                    'park'=> FALSE,
                    'art_gallery'=> FALSE,
                    'amusement_park'=> FALSE,
                    'bar'=> FALSE,
                    'pool'=> FALSE,
                    'sushi'=> TRUE,
                    'laser'=> FALSE,
                    'golf'=> FALSE,
                    'paintball'=> FALSE,
                    'concert'=> TRUE,
                    'festival'=> FALSE,
                    'rave'=> FALSE
                ]
        );

        $queryBuilder = new EventQueryBuilder($dummyArray);
        $query = $queryBuilder->buildQuery();

        $this->assertNotEmpty($query);

    }

}