<?php
class Settings extends Controller
{
  public function __construct()
  {
    if (isset($_SESSION['user_id'])) {
    } else {
      redirect('logins/index');
    }
    $this->settingModel = $this->model('Setting');
  }

  public function index()
  {
    $data = [
      'activeSide' => 'settings'
    ];
    $result = $this->settingModel->getSettings();
    $this->view('settings/index', $data, $result);
  }
  public function updateOpeningHours()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'activeSide' => 'settings',
        'mo_start' => $_POST['mo_start'],
        'mo_end' => $_POST['mo_end'],
        'di_start' => $_POST['di_start'],
        'di_end' => $_POST['di_end'],
        'mi_start' => $_POST['mi_start'],
        'mi_end' => $_POST['mi_end'],
        'do_start' => $_POST['do_start'],
        'do_end' => $_POST['do_end'],
        'fr_start' => $_POST['fr_start'],
        'fr_end' => $_POST['fr_end'],
        'sa_start' => $_POST['sa_start'],
        'sa_end' => $_POST['sa_end'],
        'so_start' => $_POST['so_start'],
        'so_end' => $_POST['so_end'],
      ];
      if ($this->settingModel->setOpeningHours($data)) {
        redirect('settings/index');
      } else {
        die('setOpeningHours schlug fehl');
      }
    } else {
      redirect('settings/index');
    }
  }
  public function updateUser()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'activeSide' => 'settings',
        'email' => $_POST['email'],
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'password' => $_POST['password'],
      ];
      if ($this->settingModel->setUserCredentials($data)) {
        redirect('settings/index');
      } else {
        die('setUserCredentials schlug fehl');
      }
    } else {
      redirect('settings/index');
    }
  }
}
