<?php

class App
{
    protected $controller = 'home';
    protected $action = 'home';
    protected $params = [];

    function __construct()
    {
        $arr = $this->urlProcess();

        //controller
        if (isset($arr[0])) {
            if (file_exists('./mvc/controllers/' . $arr[0] . '.php')) {
                $this->controller = $arr[0];
            }

            unset($arr[0]);
        }

        switch ($this->controller) {
            case 'admin':
                $this->action = 'login';
                break;
            case 'product':
                $this->action = 'product';
                break;
            case 'about':
                $this->action = 'about';
                break;
            case 'contact':
                $this->action = 'contact';
                break;
            case 'login':
                $this->action = 'login';
                break;
            case 'register':
                $this->action = 'register';
                break;
            case 'cart':
                $this->action = 'cart';
                break;
            case 'compare':
                $this->action = 'compare';
                 break;
        }

        require_once('./mvc/controllers/' . $this->controller . '.php');
        $this->controller = new $this->controller;

        //action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }

            unset($arr[1]);
        }

        //params
        $this->params = $arr ? array_values($arr) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function urlProcess()
    {
        if (isset($_GET['url'])) {
            return explode("/", filter_var(trim($_GET['url'], '/')));
        }
    }
}
