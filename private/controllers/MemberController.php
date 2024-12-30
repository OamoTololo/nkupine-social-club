<?php

class MemberController extends Controller
{
    public function index($id = null)
    {
        echo "This is the member controller class." . $id;
    }
}