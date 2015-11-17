<?php

namespace Pagekit\Hello\Controller;

use Pagekit\Application as App;

/**
 * @Access(admin=true)
 */
class HelloController
{
    public function indexAction()
    {
        return "Backend View";
    }

    /**
     * @Access("hello: manage settings")
     */
    public function settingsAction()
    {
        return [
            '$view' => [
                'title' => __('Hello Settings'),
                'name'  => 'hello:views/admin/settings.php'
            ],
            '$data' => [
                'config' => App::module('hello')->config()
            ]
        ];
    }
}
