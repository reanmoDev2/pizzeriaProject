<?php
class Menu
{
  private $db;

  public function __construct()
  {

    $this->db = new Database;
  }
  public function insert($data)
  {
    // ToDo
  }
  public function findMenuByName($name)
  {
    $this->db->query('SELECT * FROM meals WHERE name = :name');
    $this->db->bind(':name', $name);

    $row = $this->db->single();

    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
}
