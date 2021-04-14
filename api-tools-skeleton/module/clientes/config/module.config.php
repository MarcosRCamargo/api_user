<?php
return [
    'service_manager' => [
        'factories' => [
            \clientes\V1\Rest\Cliente\ClienteResource::class => \clientes\V1\Rest\Cliente\ClienteResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'clientes.rest.cliente' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/cliente[/:cliente_id]',
                    'defaults' => [
                        'controller' => 'clientes\\V1\\Rest\\Cliente\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'clientes.rest.cliente',
        ],
    ],
    'api-tools-rest' => [
        'clientes\\V1\\Rest\\Cliente\\Controller' => [
            'listener' => \clientes\V1\Rest\Cliente\ClienteResource::class,
            'route_name' => 'clientes.rest.cliente',
            'route_identifier_name' => 'cliente_id',
            'collection_name' => 'cliente',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \clientes\V1\Rest\Cliente\ClienteEntity::class,
            'collection_class' => \clientes\V1\Rest\Cliente\ClienteCollection::class,
            'service_name' => 'Cliente',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'clientes\\V1\\Rest\\Cliente\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'clientes\\V1\\Rest\\Cliente\\Controller' => [
                0 => 'application/vnd.clientes.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'clientes\\V1\\Rest\\Cliente\\Controller' => [
                0 => 'application/vnd.clientes.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \clientes\V1\Rest\Cliente\ClienteEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes.rest.cliente',
                'route_identifier_name' => 'cliente_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \clientes\V1\Rest\Cliente\ClienteCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes.rest.cliente',
                'route_identifier_name' => 'cliente_id',
                'is_collection' => true,
            ],
        ],
    ],
];
