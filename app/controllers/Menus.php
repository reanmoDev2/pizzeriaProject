<?php
class Menus extends Controller
{
  public function __construct()
  {
  }

  public function menu()
  {
    $data = [
      'activeSide' => 'menu'
    ];
    $this->view('menus/menu', $data);
  }

  public function mealinfo()
  {
    $data = [
      'activeSide' => 'menu'
    ];
    $this->view('menus/mealinfo', $data);
  }
}
