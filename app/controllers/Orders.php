<?php
class Orders extends Controller
{
  public function __construct()
  {
    if (isset($_SESSION['user_id'])) {
    } else {
      return redirect('logins/index');
    }
    $this->orderModel = $this->model('Order');
  }
  public function index()
  {
    $data = [
      'activeSide' => 'orders'
    ];

    $results = [
      'inProgress' => $this->displayAllOrdersInProgress(),
      'new' => $this->displayAllOrdersNew(),
    ];
    $this->view('orders/index', $data, $results);
  }

  public function displayAllOrdersInProgress()
  {
    $dbResponse = $this->orderModel->getAllOrdersInProgress();
    $sortedResults = [];
    foreach ($dbResponse as $row) {
      $sortedResults[$row->id][] = $row;
    }
    return $sortedResults;
  }

  public function displayAllOrdersNew()
  {
    $dbResponse = $this->orderModel->getAllOrdersNew();
    $sortedResults = [];
    foreach ($dbResponse as $row) {
      $sortedResults[$row->id][] = $row;
    }
    return $sortedResults;
  }

  public function cancelOrder()
  {
    $id = $_GET['order'];
    $this->orderModel->cancelOrderById($id);
  }

  public function payOrder()
  {
    $id = $_GET['order'];
    $this->orderModel->payOrderById($id);
  }

  public function denyOrder()
  {
    $id = $_GET['order'];
    $this->orderModel->denyOrderById($id);
  }
}
