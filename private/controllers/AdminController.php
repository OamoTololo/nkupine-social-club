<?php

class AdminController extends Controller
{
    public function index($id = null)
    {
        echo $this->view('AdminView');
    }
}