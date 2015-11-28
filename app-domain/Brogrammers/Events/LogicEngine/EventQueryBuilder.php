<?php
/**
 * Created by PhpStorm.
 * User: jwu
 * Date: 2015-11-28
 * Time: 5:15 AM
 */

namespace Brogrammers\Events\LogicEngine;


/**
 * Class EventQueryBuilder
 * @package Brogrammers\Events\LogicEngine
 */
class EventQueryBuilder
{

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
        // have function that checks validity of array
        $this->validateRequest($request);

        $this->location = $request["distance"];     // Fix the "lcoation" label based on what S and V give us
        $this->requesttype = $request["type"];      // Depends on Fam/Friends/Partner
        foreach($request['category'] as $category) {    // Loops through the incoming categories
            $this->categories[] = $category;
        }
    }


    public function buildQuery()
    {
        $goodCategories = $this->filterCategories();    // creates array of t/f value of category


        // this function called by EventLogicEngine
        // generates string query from the array keys b/c they're already filtered

        $queryKeys = array_keys($goodCategories);


        return $queryKeys;
    }

    // checks t/f value of category
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