<?php
/*
 * This file is part of the Nkupine Social Club Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) Ntwana Sosha LTD
 */
class ProfileController extends Controller
{
    public function index($id = null)
    {
        echo $this->view('ProfileView');
    }
}