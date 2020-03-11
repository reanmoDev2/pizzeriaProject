<?php
class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'activeSide' => 'index'
        ];

        $this->view('pages/index', $data);
    }

    public function dashboard()
    {
        $data = [
            'activeSide' => 'dashboard'
        ];
        $this->view('pages/dashboard', $data);
    }

    public function menu()
    {
        $data = [
            'activeSide' => 'menu'
        ];
        $this->view('pages/menu', $data);
    }
    public function orders()
    {
        $data = [
            'activeSide' => 'orders'
        ];
        $this->view('pages/orders', $data);
    }
    public function settings()
    {
        $data = [
            'activeSide' => 'settings'
        ];
        $this->view('pages/settings', $data);
    }
}
