<?php

namespace Frontend\Controllers;

use TienRocker\Auth\Controllers\Auth;

class LoginController extends Auth
{

    /**
     * @param null $provider
     * @return \Phalcon\Http\Response|\Phalcon\Http\ResponseInterface
     * @throws \Exception
     */
    public function indexAction($provider = null)
    {
        $this->view->setVar('title', 'Login');
        $this->view->disableLevel(\Phalcon\Mvc\View::LEVEL_LAYOUT);

        $this->login($provider);
    }

}

