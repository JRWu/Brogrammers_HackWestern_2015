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
    const DEFAULT_RADIUS = 25;
    const DEFAULT_PAGE_SIZE = 25;

    public function __construct(EventfulApiClient $apiClient)
    {
        parent::__construct($apiClient);
    }

    public function getEvents(
        $location,
        $keywords = null,
        $within = self::DEFAULT_RADIUS,
        $pageSize = self::DEFAULT_PAGE_SIZE
    ) {
        return $this->apiClient->getEvents(array_filter([
            'location'  => $location,
            'within'    => $within,
            'keywords'  => $keywords,
            'page_size' => $pageSize
        ]));
    }

    public function getVenues($keywords)
    {
        return $this->apiClient->getVenues([
            'keywords' => $keywords
        ]);
    }
}