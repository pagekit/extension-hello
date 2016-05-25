<?php

namespace Pagekit\Hello\Controller;

use Pagekit\Application as App;

class SiteController
{
    /**
     * @Route("/greet")
     * @Route("/greet/{name}", name="greet/name")
     */
    public function greetAction($name = '')
    {
        $names = explode(',', $name ?: App::module('hello')->config('default'));

        return [
            '$view' => [
                'title' => __('Hello %name%', ['%name%' => $names[0]]),
                'name' => 'hello:views/index.php'
            ],
            'names' => $names
        ];
    }

    public function redirectAction()
    {
        return App::response()->redirect('@hello/greet', ['name' => 'Someone']);
    }

    public function jsonAction()
    {
        return ['message' => 'There is nothing here. Move along.'];
    }

    public function downloadAction()
    {
        return App::response()->download(App::locator()->get('hello:icon.svg'));
    }

    function forbiddenAction()
    {
        App::abort(401, __('Permission denied.'));
    }

    /**
     * @Route("/")
     * @Route("/{name}", name="name")
     */
    public function indexAction($name = '')
    {
        $names = explode(',', $name ?: App::module('hello')->config('default'));

        return [
            '$view' => [
                'title' => __('Hello %name%', ['%name%' => $names[0]]),
                'name' => 'hello:views/index.php'
            ],
            'names' => $names
        ];
    }
}
