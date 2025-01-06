<?php

class ContributionsController extends Controller
{
    public function index($id = null)
    {
        echo $this->view('ContributionsView');
    }
}