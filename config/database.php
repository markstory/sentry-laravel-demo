<?php
return [
    'default' => 'postgres',
    'connections' => [
        'postgres' => [
            'driver' => 'pgsql',
            'host' => '127.0.0.1',
            'port' => '5432',
            'database' => 'demoapp',
            'username' => 'markstory',
            'password' => '',
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ]
    ]
];
