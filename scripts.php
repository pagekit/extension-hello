<?php

return [

    /*
     * Installation hook.
     */
    'install' => function ($app) {

    },

    /*
     * Enable hook
     *
     */
    'enable' => function ($app) {

    },

    /*
     * Uninstall hook
     *
     */
    'uninstall' => function ($app) {
        // remove the config
        $app['config']->remove('hello');
    },

    /*
     * Runs all updates that are newer than the current version.
     *
     */
    'updates' => [

        '0.5.0' => function ($app) {

        },

        '0.9.0' => function ($app) {

        },

    ],

];