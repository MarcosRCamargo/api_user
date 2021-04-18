<?php
return [
    'ClientesSoluti\\V1\\Rest\\Certificados\\Controller' => [
        'collection' => [
            'POST' => [
                'request' => '{
   "file_name": "",
   "url": "",
   "id_cliente": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/certificados[/:certificados_id]"
       }
   }
   "file_name": "",
   "url": "",
   "id_cliente": ""
}',
            ],
        ],
    ],
];
