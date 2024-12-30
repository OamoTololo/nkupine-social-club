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

        if (file_exists("./private/views/" .$view . ".php")) {
            require "./private/views/" .$view . ".php";
        } else {
            require "./private/views/404.php";
        }
    }
}