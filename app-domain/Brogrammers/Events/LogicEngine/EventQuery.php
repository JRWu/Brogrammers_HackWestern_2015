<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 3:56 PM
 */

namespace Brogrammers\Events\LogicEngine;


class EventQuery
{
    const RANK_1 = 0;
    const RANK_2 = 1;

    const GOOGLE_TYPES = [
        'park',
        'campground',
        'movie_theater',
        'museum',
        'restaurant',
        'spa',
        'cafe',
        'park',
        'art_gallery',
        'amusement_park',
        'bar',
    ];

    const EXTERNAL_TYPES = [
        'pool',
        'sushi',
        'laser',
        'golf',
        'paintball'
    ];

    const EVENTFUL_TYPES = [
        'concert',
        'festival',
        'rave'
    ];

    public $type;
    public $rank;
}