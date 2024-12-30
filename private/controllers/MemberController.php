<?php

class MemberController extends Controller
{
    public function index($id = null)
    {
        echo $this->view('MemberView');
    }
}