<?php

class AdminController extends Controller
{
    public function index($id = null)
    {
        echo "This is the amin controller class." . $id;
    }
}