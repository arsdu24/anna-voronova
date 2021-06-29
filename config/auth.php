<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
        'admin' => [

            'driver' => 'jwt',
            'provider' => 'admins',
        ],
        'client' => [
            'driver' => 'jwt',
            'provider' => 'clients',
        ],
        'guest' => [
            'driver' => 'jwt',
            'provider' => 'guests',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],
        'clients' => [
            'driver' => 'eloquent',
            'model' => App\Client::class,
        ],
        'guests' => [
            'driver' => 'eloquent',
            'model' => App\Guest::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
