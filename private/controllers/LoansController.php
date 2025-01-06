<?php

class LoansController extends Controller
{
    public function index($id = null)
    {
        echo $this->view('LoansView');
    }
}