<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:20 AM
 */

namespace Brogrammers\Eventful\Api;


use Edmund\PhpApiClient\AbstractApiClient;

class EventfulApiClient extends AbstractApiClient
{
    protected $apiDescription = EventfulApiDescription::class;
    protected $authenticators = ['basic' => EventfulApiAuthenticator::class];
}