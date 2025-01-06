<?php

class AboutController extends Controller
{
    public function index($id = null)
    {
        echo $this->view('AboutView');
    }
}