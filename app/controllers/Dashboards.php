<?php
class Dashboards extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'activeSide' => 'dashboard'
    ];

    $this->view('dashboards/index', $data);
  }
}
