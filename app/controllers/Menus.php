<?php
class Menus extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'activeSide' => 'menu'
    ];
    $this->view('menus/index', $data);
  }

  public function show()
  {
    $data = [
      'activeSide' => 'menu'
    ];
    $this->view('menus/show', $data);
  }
}
