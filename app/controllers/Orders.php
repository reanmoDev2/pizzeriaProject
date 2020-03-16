<?php
class Orders extends Controller
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
      'activeSide' => 'orders'
    ];
    $this->view('orders/index', $data);
  }
}
