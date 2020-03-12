<?php
class Logins extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];

        $this->view('logins/index', $data);
    }
}
