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
            return file_get_contents("./private/views/" .$view . ".php");
        } else {
            return file_get_contents("./private/views/404.php");
        }
    }
}