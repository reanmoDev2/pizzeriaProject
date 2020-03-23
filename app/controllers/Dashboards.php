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
    if (empty($_POST['orderDirection'])) {
      $direction = 'DESC';
    } else {
      $direction = $_POST['orderDirection'];
    }
    $data = [
      'activeSide' => 'dashboard',
      'setDirection' => $direction,
    ];
    $results = [
      'sales' => $this->dashboardModel->getSales(),
      'sold' => $this->dashboardModel->getSold($data['setDirection']),
      'chart' => $this->dashboardModel->getChartData()
    ];
    $this->view('dashboards/index', $data, $results);
  }

  public function getSoldByOrder()
  {
    $direction = $_GET['order'];
    echo json_encode($this->dashboardModel->getSold($direction));
  }
}
