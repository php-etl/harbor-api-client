<?php

return [
    'openapi-file' => __DIR__.'/harbor.json',
    'namespace' => 'Gyroscops\Harbor\Api',
    'directory' => __DIR__ . '/../src/',
    'strict' => false,
    'date-prefer-interface' => true,
    'whitelisted-paths' => [
        ['^\/users$', ['GET', 'POST']],
        ['^\/users/search$', ['GET']],
        ['^\/users/\d+$', ['GET', 'PUT', 'DELETE']],
        ['^\/users/\d+/password$', ['PUT']],
        ['^\/projects$', ['HEAD', 'GET', 'POST']],
        ['^\/project/(\d+|[\w-]+)$', ['GET', 'PUT', 'DELETE']],
        ['^\/project/(\d+|[\w-]+)/members$', ['GET', 'POST']],
        ['^\/project/(\d+|[\w-]+)/members/\d+$', ['GET', 'PUT', 'DELETE']],
    ]
];
