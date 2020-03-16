<?php
class Settings extends Controller
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
      'activeSide' => 'settings'
    ];

    $this->view('settings/index', $data);
  }
}
