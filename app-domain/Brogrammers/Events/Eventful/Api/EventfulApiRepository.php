<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:59 AM
 */

namespace Brogrammers\Events\Eventful\Api;

use Brogrammers\Common\Api\AbstractApiRepository;

class EventfulApiRepository extends AbstractApiRepository
{
    public function __construct(EventfulApiClient $apiClient)
    {
        parent::__construct($apiClient);
    }

    public function getEvents($location, $keywords)
    {
        return $this->apiClient->getEvents([
            'location' => $location,
            'keywords' => $keywords
        ]);
    }

    public function getVenues($keywords)
    {
        return $this->apiClient->getVenues([
            'keywords' => $keywords
        ]);
    }
}