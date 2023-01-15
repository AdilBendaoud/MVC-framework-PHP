<?php
class Bootstrap
{
    private $controller;
    private $action;
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
        if ($this->request['controller'] == '') {
            $this->controller = 'home';
        } else {
            $this->controller = $request['controller'];
        }

        if ($this->request['action'] == '') {
            $this->action = 'index';
        } else {
            $this->action = $request['action'];
        }
    }

    public function createController()
    {
        if (class_exists($this->controller)) {
            if (method_exists($this->controller, $this->action)) {
                return new $this->controller($this->action, $this->request);
            } else {
                echo '<h1> Method does not exist</h1>';
                return;
            }
        } else {
            echo '<h1>Class does not exist</h1>';
            return;
        }
    }

}