<?php
/**
 * Created by PhpStorm.
 * User: edmund
 * Date: 28/11/15
 * Time: 2:21 AM
 */

namespace Brogrammers\Events\GooglePlaces\Api;


use Edmund\PhpApiClient\AbstractApiDescription;

class GooglePlacesApiDescription extends AbstractApiDescription
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
            'baseUrl'              => 'https://maps.googleapis.com/maps/api/',
            'operations'           => [
                'getEvents'       => [
                    'httpMethod'    => 'GET',
                    'uri'           => 'place/nearbysearch/json',
                    'responseModel' => 'JsonResponse',
                    'parameters'    => [
                        'location' => [
                            'type'     => 'string',
                            'location' => 'query',
                            'required' => true
                        ],
                        'radius'   => [
                            'type'     => 'string',
                            'location' => 'query',
                            'required' => true
                        ],
                        'types'    => [
                            'type'     => ['string', 'array'],
                            'location' => 'query',
                            'required' => false
                        ],
                        'name'     => [
                            'type'     => 'string',
                            'location' => 'query',
                            'required' => false
                        ],
                    ]
                ],
                'getEventDetails' => [
                    'httpMethod'    => 'GET',
                    'uri'           => 'place/details/json',
                    'responseModel' => 'JsonResponse',
                    'parameters'    => [
                        'placeid' => [
                            'type'     => 'string',
                            'location' => 'query',
                            'required' => true
                        ],
                    ]
                ],
                'getCoordinates'  => [
                    'httpMethod'    => 'GET',
                    'uri'           => 'geocode/json',
                    'responseModel' => 'JsonResponse',
                    'parameters'    => [
                        'address'    => [
                            'type'     => 'string',
                            'location' => 'query',
                            'required' => true
                        ],
                        'components' => [
                            'type'     => 'string',
                            'location' => 'query',
                            'required' => false
                        ]
                    ]
                ]
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