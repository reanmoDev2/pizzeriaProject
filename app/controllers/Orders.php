<?php
class Orders extends Controller
{
  public function __construct()
  {
  }
  public function index()
  {
    $data = [
      'activeSide' => 'orders'
    ];
    $this->view('orders/index', $data);
  }
}
