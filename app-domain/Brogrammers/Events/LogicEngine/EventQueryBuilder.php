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
    const DISTANCE = "distance";
    const TYPE = "type";
    const CATEGORY = 'category';

    /**
     * @var location describes how far the user is willing to travel for each activity
     */
    protected $location;

    /**
     * @var requesttype describes what class of activity was picked (Fam/Friends/Partners)
     */
    protected $requesttype;

    /**
     * @var array is the set of T/F values for categories being selected for
     */
    protected $categories = [];


    public function __construct(array $request)
    {
        $this->validateRequest($request);

        $this->location = $request[self::DISTANCE];     // Fix the "lcoation" label based on what S and V give us
        $this->requesttype = $request[self::TYPE];      // Depends on Fam/Friends/Partner
        foreach ($request[self::CATEGORY] as $category) {    // Loops through the incoming categories
            $this->categories[] = $category;
        }
    }

    private function validateRequest($request)
    {
        $expectedKeys = [
            self::DISTANCE,
            self::TYPE,
            self::CATEGORY
        ];

        foreach ($expectedKeys as $key) {
            if (!array_key_exists($key, $request) || empty($request[$key])) {
                throw new Exception('Missing expected keys');
            }
        }
    }

    // checks t/f value of category

    public function buildQuery()
    {
        $goodCategories = $this->filterCategories();    // creates array of t/f value of category


        // this function called by EventLogicEngine
        // generates string query from the array keys b/c they're already filtered

        $queryKeys = array_keys($goodCategories);


        return $query;
    }

    public function filterCategories()
    {
        $filteredCategories = [];

        foreach ($this->categories as $category) {
            if ($category === true) {
                $filteredCategories[] = $category;
            }
        }

        return $filteredCategories;
    }
}