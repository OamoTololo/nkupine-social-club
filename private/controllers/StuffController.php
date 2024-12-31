<?php

class StuffController extends Controller
{
    public function index($id = null)
    {
        echo $this->view('StuffView');
    }
}