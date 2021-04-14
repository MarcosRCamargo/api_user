<?php
return [
    'service_manager' => [
        'factories' => [
            \clientes\V1\Rest\Cliente\ClienteResource::class => \clientes\V1\Rest\Cliente\ClienteResourceFactory::class,
            \clientes\V1\Rest\Certificado\CertificadoResource::class => \clientes\V1\Rest\Certificado\CertificadoResourceFactory::class,
            \clientes\V1\Rest\Endereco\EnderecoResource::class => \clientes\V1\Rest\Endereco\EnderecoResourceFactory::class,
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
            'clientes.rest.certificado' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/certificado[/:certificado_id]',
                    'defaults' => [
                        'controller' => 'clientes\\V1\\Rest\\Certificado\\Controller',
                    ],
                ],
            ],
            'clientes.rest.endereco' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/endereco[/:endereco_id]',
                    'defaults' => [
                        'controller' => 'clientes\\V1\\Rest\\Endereco\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'clientes.rest.cliente',
            1 => 'clientes.rest.certificado',
            2 => 'clientes.rest.endereco',
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
                4 => 'POST',
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
        'clientes\\V1\\Rest\\Certificado\\Controller' => [
            'listener' => \clientes\V1\Rest\Certificado\CertificadoResource::class,
            'route_name' => 'clientes.rest.certificado',
            'route_identifier_name' => 'certificado_id',
            'collection_name' => 'certificado',
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
            'entity_class' => \clientes\V1\Rest\Certificado\CertificadoEntity::class,
            'collection_class' => \clientes\V1\Rest\Certificado\CertificadoCollection::class,
            'service_name' => 'Certificado',
        ],
        'clientes\\V1\\Rest\\Endereco\\Controller' => [
            'listener' => \clientes\V1\Rest\Endereco\EnderecoResource::class,
            'route_name' => 'clientes.rest.endereco',
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
            'entity_class' => \clientes\V1\Rest\Endereco\EnderecoEntity::class,
            'collection_class' => \clientes\V1\Rest\Endereco\EnderecoCollection::class,
            'service_name' => 'Endereco',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'clientes\\V1\\Rest\\Cliente\\Controller' => 'HalJson',
            'clientes\\V1\\Rest\\Certificado\\Controller' => 'HalJson',
            'clientes\\V1\\Rest\\Endereco\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'clientes\\V1\\Rest\\Cliente\\Controller' => [
                0 => 'application/vnd.clientes.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'clientes\\V1\\Rest\\Certificado\\Controller' => [
                0 => 'application/vnd.clientes.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'clientes\\V1\\Rest\\Endereco\\Controller' => [
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
            'clientes\\V1\\Rest\\Certificado\\Controller' => [
                0 => 'application/vnd.clientes.v1+json',
                1 => 'application/json',
            ],
            'clientes\\V1\\Rest\\Endereco\\Controller' => [
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
            \clientes\V1\Rest\Certificado\CertificadoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes.rest.certificado',
                'route_identifier_name' => 'certificado_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \clientes\V1\Rest\Certificado\CertificadoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes.rest.certificado',
                'route_identifier_name' => 'certificado_id',
                'is_collection' => true,
            ],
            \clientes\V1\Rest\Endereco\EnderecoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes.rest.endereco',
                'route_identifier_name' => 'endereco_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \clientes\V1\Rest\Endereco\EnderecoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'clientes.rest.endereco',
                'route_identifier_name' => 'endereco_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'clientes\\V1\\Rest\\Cliente\\Controller' => [
            'input_filter' => 'clientes\\V1\\Rest\\Cliente\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'clientes\\V1\\Rest\\Cliente\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'nome',
                'description' => 'Nome do cliente',
                'field_type' => 'string',
                'error_message' => 'Nome não informado.',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'cpf',
                'description' => 'Número do CPF do cliente',
                'field_type' => 'int',
                'error_message' => 'CPF não informado.',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'telefones',
                'description' => 'Telefones',
                'field_type' => 'array',
                'error_message' => 'É necessário pelo menos um telefone.',
            ],
            3 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\EmailAddress::class,
                        'options' => [
                            'useDomainCheck' => false,
                        ],
                    ],
                ],
                'filters' => [],
                'name' => 'email',
                'description' => 'E-mail do Cliente',
                'field_type' => 'string',
                'error_message' => 'E-mail não informado.',
            ],
            4 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\Date::class,
                        'options' => [
                            'format' => '',
                        ],
                    ],
                ],
                'filters' => [],
                'name' => 'data_nas',
                'description' => 'Data de Nascimento do Cliente',
                'field_type' => 'date',
                'error_message' => 'Data de nascimento não informada.',
            ],
            5 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\File\Md5::class,
                        'options' => [
                            'hash' => '',
                        ],
                    ],
                ],
                'filters' => [],
                'name' => 'senha',
                'description' => 'Senha de acesso do cliente',
                'field_type' => 'string',
                'error_message' => 'Senha não informada.',
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
            'clientes\\V1\\Rest\\Cliente\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => false,
                    'DELETE' => true,
                ],
            ],
        ],
    ],
];
