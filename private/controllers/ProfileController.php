<?php

class ProfileController extends Controller
{
    public function index($id = null)
    {
        echo $this->view('ProfileView');
    }
}