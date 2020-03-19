<?php
class Dashboards extends Controller
{
  public function __construct()
  {
    if (isset($_SESSION['user_id'])) {
    } else {
      return redirect('logins/index');
    }
    $this->dashboardModel = $this->model('Dashboard');
  }

  public function index()
  {
    $data = [
      'activeSide' => 'dashboard',
      'orderDirection' => 'DESC',
    ];
    $results = [
      'sales' => $this->dashboardModel->getSales(),
      'sold' => $this->dashboardModel->getSold($data['orderDirection'])
    ];
    $this->view('dashboards/index', $data, $results);
  }
}
