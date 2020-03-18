<?php
class Menu
{
  public $db;

  public function __construct()
  {

    $this->db = new Database;
  }
  public function insertMeal($data)
  {
    // ToDo
    $this->db->query('INSERT INTO `meals` (`name`, `course`, `price_small`, `price_medium`, `price_large`, `description`) VALUES (:name, :course, :price_small, :price_medium, :price_large, :description);');
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':course', $data['course']);
    $this->db->bind(':price_small', $data['price_small']);
    $this->db->bind(':price_medium', $data['price_medium']);
    $this->db->bind(':price_large', $data['price_large']);
    $this->db->bind(':description', $data['description']);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function updateImage($img)
  {
    $lastId = $this->db->getLastId();
    $this->db->query('UPDATE `meals` SET `image`= :img WHERE id = :id');
    $this->db->bind(':img', $img);
    $this->db->bind(':id', $lastId);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
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
