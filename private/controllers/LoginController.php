<?php
/*
 * This file is part of the Nkupine Social Club Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) Ntwana Sosha LTD
 */

class LoginController extends Controller
{
    public function index($id = null)
    {
        $this->view('authenticate/LoginView');
    }
}