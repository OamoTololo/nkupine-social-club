<?php
/*
 * This file is part of the Nkupine Social Club Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) Ntwana Sosha LTD
 */
class App
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $URL = $this->getURL();

        // Check if the controller file exists
        if (isset($URL[0]) && file_exists('./private/controllers/' . ucfirst($URL[0]) . '.php')) {
            $this->controller = ucfirst($URL[0]); // Capitalize the first letter
            unset($URL[0]);
        } else {
            die("Controller {$URL[0]} does not exist.");
        }

        // Require the controller file
        $controllerFile = "./private/controllers/{$this->controller}.php";
        if (file_exists($controllerFile)) {
            require $controllerFile;
        } else {
            die("Controller file {$controllerFile} not found.");
        }

        // Instantiate the controller class
        if (class_exists($this->controller)) {
            $this->controller = new $this->controller();
        } else {
            die("Controller class {$this->controller} not found.");
        }

        // Check for the method
        if (isset($URL[1]) && method_exists($this->controller, $URL[1])) {
            $this->method = $URL[1];
            unset($URL[1]);
        }

        $URL = array_values($URL);

        $this->params = $URL;

        // Call the controller method with parameters
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function getURL()
    {
        $url = $_GET['url'] ?? 'HomeController';
        return explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
    }
}
