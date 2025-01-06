<?php
/*
 * This file is part of the Nkupine Social Club Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) Ntwana Sosha LTD
 */

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);

        if (file_exists("./private/views/{$view}.php")) {
            require "./private/views/{$view}.php";
        } else {
            require "./private/views/404.php";
        }
    }

    public function loadModel($model): Model
    {
        $model = ucfirst($model);

        if (file_exists("./private/models/{$model}.php")) {
            require "./private/models/{$model}.php";
            return $model = new Model();
        }

        return false;
    }
}