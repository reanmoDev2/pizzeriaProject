<?php
class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'Mamma\'s SIMPLE FOOD'
        ];

        $this->view('pages/index', $data);
    }

    public function dashboard()
    {
        $data = ['title' => 'Mamma\'s SIMPLE FOOD'];
        $this->view('pages/dashboard', $data);
    }
}
