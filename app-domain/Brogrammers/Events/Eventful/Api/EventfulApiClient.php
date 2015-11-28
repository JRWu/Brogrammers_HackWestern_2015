<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:20 AM
 */

namespace Brogrammers\Events\Eventful\Api;


use Brogrammers\Eventful\Api\EventfulApiAuthenticator;
use Edmund\PhpApiClient\AbstractApiClient;

class EventfulApiClient extends AbstractApiClient
{
    protected $apiDescription = EventfulApiDescription::class;
    protected $authenticators = ['basic' => EventfulApiAuthenticator::class];
}