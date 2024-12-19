<?php
/**
 * Author: Oamogetswe Mgidi
 *
 * Main app file
 */
class App
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        print_r($this->getURL());
    }
    private function getURL()
    {
        echo '<pre>';
        return explode('/', filter_var(trim($_GET['url'], '/')), FILTER_SANITIZE_URL);
    }
}