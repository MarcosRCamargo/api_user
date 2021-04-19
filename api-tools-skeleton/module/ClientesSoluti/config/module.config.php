<?php
return [
    'router' => [
        'routes' => [
            'clientes-soluti.rest.certificados' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/certificados[/:certificados_id]',
                    'defaults' => [
                        'controller' => 'ClientesSoluti\\V1\\Rest\\Certificados\\Controller',
                    ],
                ],
            ],
            'clientes-soluti.rest.endereco' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/endereco[/:endereco_id]',
                    'defaults' => [
                        'controller' => 'ClientesSoluti\\V1\\Rest\\Endereco\\Controller',
                    ],
                ],
            ],
            'clientes-soluti.rest.clientes' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/clientes[/:clientes_id]',
                    'defaults' => [
                        'controller' => 'ClientesSoluti\\V1\\Rest\\Clientes\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'clientes-soluti.rest.certificados',
            1 => 'clientes-soluti.rest.endereco',
            2 => 'clientes-soluti.rest.clientes',
        ],
    ],
    'api-tools-rest' => [
        'ClientesSoluti\\V1\\Rest\\Certificados\\Controller' => [
            'listener' => 'ClientesSoluti\\V1\\Rest\\Certificados\\CertificadosResource',
            'route_name' => 'clientes-soluti.rest.certificados',
            'route_identifier_name' => 'certificados_id',
            'collection_name' => 'certificados',
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
            'entity_class' => \ClientesSoluti\V1\Rest\Certificados\CertificadosEntity::class,
            'collection_class' => \ClientesSoluti\V1\Rest\Certificados\CertificadosCollection::class,
            'service_name' => 'certificados',
        ],
        'ClientesSoluti\\V1\\Rest\\Endereco\\Controller' => [
            'listener' => 'ClientesSoluti\\V1\\Rest\\Endereco\\EnderecoResource',
            'route_name' => 'clientes-soluti.rest.endereco',
            'route_identifier_name' => 'endereco_id',
            'collection_name' => 'endereco',
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
            'entity_class' => \ClientesSoluti\V1\Rest\Endereco\EnderecoEntity::class,
            'collection_class' => \ClientesSoluti\V1\Rest\Endereco\EnderecoCollection::class,
            'service_name' => 'endereco',
        ],
        'ClientesSoluti\\V1\\Rest\\Clientes\\Controller' => [
            'listener' => 'ClientesSoluti\\V1\\Rest\\Clientes\\ClientesResource',
            'route_name' => 'clientes-soluti.rest.clientes',
            'route_identifier_name' => 'clientes_id',
            'collection_name' => 'clientes',
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
            'entity_class' => \ClientesSoluti\V1\Rest\Clientes\ClientesEntity::class,
            'collection_class' => \ClientesSoluti\V1\Rest\Clientes\ClientesCollection::class,
            'service_name' => 'clientes',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'ClientesSoluti\\V1\\Rest\\Certificados\\Controller' => 'Json',
            'ClientesSoluti\\V1\\Rest\\Endereco\\Controller' => 'Json',
            'ClientesSoluti\\V1\\Rest\\Clientes\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'ClientesSoluti\\V1\\Rest\\Certificados\\Controller' => [
                0 => 'application/vnd.clientes-soluti.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ClientesSoluti\\V1\\Rest\\Endereco\\Controller' => [
                0 => 'application/vnd.clientes-soluti.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ClientesSoluti\\V1\\Rest\\Clientes\\Controller' => [
                0 => 'application/vnd.clientes-soluti.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'ClientesSoluti\\V1\\Rest\\Certificados\\Controller' => [
                0 => 'application/vnd.clientes-soluti.v1+json',
                1 => 'application/json',
            ],
            'ClientesSoluti\\V1\\Rest\\Endereco\\Controller' => [
                0 => 'application/vnd.clientes-soluti.v1+json',
                1 => 'application/json',
            ],
            'ClientesSoluti\\V1\\Rest\\Clientes\\Controller' => [
                0 => 'application/vnd.clientes-soluti.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \ClientesSoluti\V1\Rest\Certificados\CertificadosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes-soluti.rest.certificados',
                'route_identifier_name' => 'certificados_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \ClientesSoluti\V1\Rest\Certificados\CertificadosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes-soluti.rest.certificados',
                'route_identifier_name' => 'certificados_id',
                'is_collection' => true,
            ],
            \ClientesSoluti\V1\Rest\Endereco\EnderecoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes-soluti.rest.endereco',
                'route_identifier_name' => 'endereco_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \ClientesSoluti\V1\Rest\Endereco\EnderecoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes-soluti.rest.endereco',
                'route_identifier_name' => 'endereco_id',
                'is_collection' => true,
            ],
            \ClientesSoluti\V1\Rest\Clientes\ClientesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes-soluti.rest.clientes',
                'route_identifier_name' => 'clientes_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \ClientesSoluti\V1\Rest\Clientes\ClientesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes-soluti.rest.clientes',
                'route_identifier_name' => 'clientes_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'ClientesSoluti\\V1\\Rest\\Certificados\\CertificadosResource' => [
                'adapter_name' => \PDO::class,
                'table_name' => 'certificados',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'ClientesSoluti\\V1\\Rest\\Certificados\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'ClientesSoluti\\V1\\Rest\\Certificados\\CertificadosResource\\Table',
            ],
            'ClientesSoluti\\V1\\Rest\\Endereco\\EnderecoResource' => [
                'adapter_name' => \PDO::class,
                'table_name' => 'endereco',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'ClientesSoluti\\V1\\Rest\\Endereco\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'ClientesSoluti\\V1\\Rest\\Endereco\\EnderecoResource\\Table',
            ],
            'ClientesSoluti\\V1\\Rest\\Clientes\\ClientesResource' => [
                'adapter_name' => \PDO::class,
                'table_name' => 'clientes',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'ClientesSoluti\\V1\\Rest\\Clientes\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'ClientesSoluti\\V1\\Rest\\Clientes\\ClientesResource\\Table',
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'ClientesSoluti\\V1\\Rest\\Certificados\\Controller' => [
            'input_filter' => 'ClientesSoluti\\V1\\Rest\\Certificados\\Validator',
        ],
        'ClientesSoluti\\V1\\Rest\\Endereco\\Controller' => [
            'input_filter' => 'ClientesSoluti\\V1\\Rest\\Endereco\\Validator',
        ],
        'ClientesSoluti\\V1\\Rest\\Clientes\\Controller' => [
            'input_filter' => 'ClientesSoluti\\V1\\Rest\\Clientes\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'ClientesSoluti\\V1\\Rest\\Certificados\\Validator' => [
            0 => [
                'name' => 'file_name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'url',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'id_cliente',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => \PDO::class,
                            'table' => 'clientes',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
        ],
        'ClientesSoluti\\V1\\Rest\\Endereco\\Validator' => [
            0 => [
                'name' => 'rua',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'cidade',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'estado',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'id_cliente',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
        'ClientesSoluti\\V1\\Rest\\Clientes\\Validator' => [
            0 => [
                'name' => 'nome',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'cpf',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            2 => [
                'name' => 'email',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'telefones',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'data_nasc',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'senha',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
            'ClientesSoluti\\V1\\Rest\\Clientes\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
];
