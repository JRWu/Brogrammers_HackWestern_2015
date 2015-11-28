<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 3:03 AM
 */

namespace Brogrammers\Common\Api;

use Edmund\PhpApiClient\AbstractApiClient;

/**
 * Abstract API repository.
 */
abstract class AbstractApiRepository
{
    /**
     * @var AbstractApiClient $apiClient
     */
    protected $apiClient;

    /**
     * Constructor.
     *
     * @param AbstractApiClient $client
     */
    public function __construct(AbstractApiClient $client)
    {
        $this->apiClient = $client;
    }
}