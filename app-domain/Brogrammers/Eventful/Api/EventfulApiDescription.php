<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:21 AM
 */

namespace Brogrammers\Eventful\Api;


use Edmund\PhpApiClient\AbstractApiDescription;

class EventfulApiDescription extends AbstractApiDescription
{
    /**
     * Loads the API service description.
     *
     * @return static
     */
    public function load()
    {
        return new static([
            'additionalProperties' => true,
            'baseUrl'              => 'http://api.eventful.com/json/',
            'operations'           => [
                'getEvents' => [
                    'httpMethod'    => 'GET',
                    'uri'           => 'events/search',
                    'responseModel' => 'JsonResponse',
                    'parameters'    => [
                        'keywords' => [
                            'type'     => 'string',
                            'location' => 'query',
                            'required' => true
                        ],
                    ]
                ],
                'getVenues' => [
                    'httpMethod'    => 'GET',
                    'uri'           => 'venues/search',
                    'responseModel' => 'JsonResponse',
                    'parameters'    => [
                        'keywords' => [
                            'type'     => 'string',
                            'location' => 'query',
                            'required' => true
                        ]
                    ]
                ],
            ],
            'models'               => [
                'JsonResponse' => [
                    'type'                 => 'object',
                    'additionalProperties' => [
                        'location' => 'json'
                    ]
                ]
            ]
        ]);
    }
}