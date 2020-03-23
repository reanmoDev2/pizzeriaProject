<?php
class Order
{
  public $db;

  public function __construct()
  {

    $this->db = new Database;
  }
}
