<?php

class ControllerErrors extends \Phalcon\Mvc\Controller
{
    /**
     * Call first
     */
    public function initialize()
    {

    }

    /**
     * Show 401 error page
     */
    public function show401Action()
    {
        $this->response->setStatusCode(401, 'Not Found');
    }

    /**
     * Show 404 error page
     */
    public function show404Action()
    {
        $this->response->setStatusCode(404, 'Not Found');
    }

    /**
     * Show 500 error page
     */
    public function show500Action()
    {
        $this->response->setStatusCode(500, 'Not Found');
    }
}

