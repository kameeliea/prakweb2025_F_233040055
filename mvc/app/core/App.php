<?php

class App
{
    protected $controller = 'User';     // default controller
    protected $method = 'index';        // default method
    protected $params = [];             // parameter opsional

    public function __construct()
    {
        $url = $this->parseURL();

        // 1️⃣ Cek Controller
        if (isset($url[0]) && file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // 2️⃣ Cek Method
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // 3️⃣ Ambil parameter
        $this->params = $url ? array_values($url) : [];

        // 4️⃣ Jalankan controller + method + params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
        return ['User']; // default
    }
}
