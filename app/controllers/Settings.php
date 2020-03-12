<?php
class Settings extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'activeSide' => 'settings'
    ];

    $this->view('settings/index', $data);
  }
}
