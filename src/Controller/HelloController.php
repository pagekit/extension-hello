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

    public function settingsAction()
    {
        return "Settings View";
    }
}
