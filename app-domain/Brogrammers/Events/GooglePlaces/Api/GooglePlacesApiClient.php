<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:20 AM
 */

namespace Brogrammers\Events\GooglePlaces\Api;


use Edmund\PhpApiClient\AbstractApiClient;

class GooglePlacesApiClient extends AbstractApiClient
{
    protected $apiDescription = GooglePlacesApiDescription::class;
    protected $authenticators = ['basic' => GooglePlacesApiAuthenticator::class];
}