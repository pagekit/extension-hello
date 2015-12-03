<?php

use Pagekit\Application;

/*
 * This array is the module definition.
 * It's used by Pagekit to load your extension and register all things
 * that your extension provides (routes, menu items, php classes etc)
 */
return [

    /*
     * Define a unique name.
     */
    'name' => 'hello',

    /*
     * Define the type of this module.
     * Has to be 'extension' here. Can be 'theme' for a theme.
     */
    'type' => 'extension',

    /*
     * Main entry point. Called when your extension is both installed and activated.
     * Either assign an closure or a string that points to a PHP class.
     * Example: 'main' => 'Pagekit\\Hello\\HelloExtension'
     */
    'main' => function (Application $app) {

        // bootstrap code

    },

    /*
     * Register all namespaces to be loaded.
     * Map from namespace to folder where the classes are located.
     * Remember to escape backslashes with a second backslash.
     */
    'autoload' => [

        'Pagekit\\Hello\\' => 'src'

    ],

    /*
     * Define nodes. A node is similar to a route with the difference
     * that it can be placed anywhere in the menu structure. The
     * resulting route is therefore determined on runtime.
     */
    'nodes' => [

        'hello' => [

            // The name of the node route
            'name' => '@hello',

            // Label to display in the backend
            'label' => 'Hello',

            // The controller for this node. Each controller action will be mounted
            'controller' => 'Pagekit\\Hello\\Controller\\SiteController',

            // A unique node that cannot be deleted, resides in "Not Linked" by default
            'protected' => true

        ]

    ],


    /*
     * Define routes.
     */
    'routes' => [

        '/hello' => [
            'name' => '@hello/admin',
            'controller' => [
                'Pagekit\\Hello\\Controller\\HelloController'
            ]
        ]

    ],

    /*
     * Define menu items for the backend.
     */
    'menu' => [

        // name, can be used for menu hierarchy
        'hello' => [

            // Label to display
            'label' => 'Hello',

            // Icon to display
            'icon' => 'hello:icon.svg',

            // URL this menu item links to
            'url' => '@hello/admin',

            // Optional: Expression to check if menu item is active on current url
            // 'active' => '@hello*'

            // Optional: Limit access to roles which have specific permission assigned
            // 'access' => 'hello: manage hellos'
        ],

        'hello: panel' => [

            // Parent menu item, makes this appear on 2nd level
            'parent' => 'hello',

            // See above
            'label' => 'Hello',
            'icon' => 'hello:icon.svg',
            'url' => '@hello/admin'
            // 'access' => 'hello: manage hellos'
        ],

        'hello: settings' => [
            'parent' => 'hello',
            'label' => 'Settings',
            'url' => '@hello/admin/settings',
            'access' => 'system: manage settings'
        ]

    ],

    /*
     * Define permissions.
     * Will be listed in backend and can then be assigned to certain roles.
     */
    'permissions' => [

        // Unique name.
        // Convention: extension name and speaking name of this permission (spaces allowd)
        'hello: manage settings' => [
            'title' => 'Manage settings'
        ],

    ],

    /*
     * Link to a settings screen from the extensions listing.
     */
    'settings' => '@hello/admin/settings',

    /*
     * Default module configuration.
     * Can be overwritten by changed config during runtime.
     */
    'config' => [

        'default' => 'World'

    ],

    /*
     * Listen to events.
     */
    'events' => [

        'view.scripts' => function ($event, $scripts) {
            $scripts->register('hello-link', 'hello:app/bundle/link.js', '~panel-link');
            $scripts->register('hello-dashboard', 'hello:app/bundle/dashboard.js', '~dashboard');

        }

    ]

];
