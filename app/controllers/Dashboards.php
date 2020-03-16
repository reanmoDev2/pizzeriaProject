<?php
class Dashboards extends Controller
{
  public function __construct()
  {
    if (isset($_SESSION['user_id'])) {
    } else {
      redirect('logins/index');
    }
  }

  public function index()
  {
    $data = [
      'activeSide' => 'dashboard'
    ];

    $this->view('dashboards/index', $data);
  }
}
