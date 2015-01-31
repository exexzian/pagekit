<?php

use Pagekit\Hello\HelloExtension;

return [

    'name' => 'hello',

    'main' => function ($app, $config) {

        $extension = new HelloExtension();
        $extension->setConfig($config);
        $extension->load($app, $config);

        return $extension;
    },

    'autoload' => [

        'Pagekit\\Hello\\' => 'src'

    ],

    'controllers' => [

        '@hello: /hello' => [
            'Pagekit\\Hello\\Controller\\HelloController',
            'Pagekit\\Hello\\Controller\\SiteController'
        ]
    ],

    'parameters' => [

        'settings' => [

            'view' => 'extensions/hello/views/admin/settings.razr',
            'defaults' => [
                'message' => 'World'
            ]

        ]

    ],

    'menu' => [

        'hello' => [
            'label'  => 'Hello',
            'icon'   => 'extensions/hello/extension.svg',
            'url'    => '@hello/hello',
            'active' => '@hello/hello*',
            'access' => 'hello: manage hellos'
        ]

    ]

];
