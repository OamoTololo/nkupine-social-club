<?php
/*
 * This file is part of the Nkupine Social Club Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) Ntwana Sosha LTD
 */

class HomeController extends Controller
{
    public function index($id = null)
    {
        $member = $this->loadModel("Members");

        $data = $member->findAll();

        if (empty($data)) {
            error_log("No members were found with the specified criteria.");
        }

        // Render the view with the data
        echo $this->view('HomeView', ['rows' => $data ?: []]);
    }
}
