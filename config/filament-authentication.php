<?php

return [
    'resources' => [
        'UserResource' => \Phpsa\FilamentAuthentication\Resources\UserResource::class,
        'RoleResource' => \Phpsa\FilamentAuthentication\Resources\RoleResource::class,
       'PermissionResource' => \Phpsa\FilamentAuthentication\Resources\PermissionResource::class,
    ],
    'pages' => [
        'Profile' => \Phpsa\FilamentAuthentication\Pages\Profile::class
    ],
    'Widgets' => [
        'LatesetUsers' => [
            'enabled' => true,
            'limit' => 5,
        ],
    ],
    'user_timezone' => 'Pacific/Auckland',
    'preload_roles' => true,
    'impersonate' => [
        'enabled' => true,
        'guard' => 'web',
        'redirect' => '/'
        ]

];
