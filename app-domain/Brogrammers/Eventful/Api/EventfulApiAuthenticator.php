<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:23 AM
 */

namespace Brogrammers\Eventful\Api;


use Edmund\PhpApiClient\Auth\AbstractAuthenticator;
use GuzzleHttp\Event\BeforeEvent;
use GuzzleHttp\Message\Request;

class EventfulApiAuthenticator extends AbstractAuthenticator
{
    const API_KEY = 'apiKey';

    public function __construct(EventfulApiClient $client)
    {
        parent::__construct($client);

        $this->apiKey = $this->client->getApiConfig()[self::API_KEY];
    }

    /**
     * Signs an API request using an authentication flow.
     *
     * @param BeforeEvent $event
     */
    public function sign(BeforeEvent $event)
    {
        $request = $event->getRequest();

        if ($request->getMethod() === 'GET') {
            $this->authenticateGetRequest($request);
        }
    }

    /**
     * @param Request $request
     */
    private function authenticateGetRequest(Request $request)
    {
        $request->addHeader('Accept', 'text/plain');
        $request->addHeader('X-Mashape-Key', 'WQPyWPhhhXmshABhby8Qv8XHOOajp1TNBbzjsnvVbtyHARmpw8');
        $request->getQuery()->add('app_key', $this->apiKey);
    }
}