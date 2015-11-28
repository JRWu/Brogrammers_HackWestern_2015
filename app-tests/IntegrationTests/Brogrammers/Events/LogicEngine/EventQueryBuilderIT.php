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
            "distance" => 0,
            "type" => "family",
            "categories" =
                [
                    "tennis" => FALSE,
                    "pool" => FALSE,
                    "miniPutt" => FALSE,
                    "winterSports" => FALSE,
                    "beach" => FALSE,
                    "concert" => FALSE,
                    "movies" => FALSE,
                    "sushi" => FALSE,
                    "amusementPark" => FALSE,
                    "famRestaurants" => FALSE,
                    "waterSports" => FALSE,
                    "camping" => FALSE,
                    "museum" => FALSE
                ]
        );

        $queryBuilder = new EventQueryBuilder($dummyArray);
        $query = $queryBuilder->buildQuery();

        $this->assertNotEmpty($query);

    }

}