<?php
class Menu
{
  public $db;

  public function __construct()
  {

    $this->db = new Database;
  }

  public function deleteById($id)
  {
    $this->db->query('DELETE FROM `meals` WHERE `meals`.`id` = :id');
    $this->db->bind(':id', $id);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function insertMeal($data)
  {
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

  public function updateMeal($data)
  {
    $this->db->query('UPDATE `meals` 
                      SET `name` = :name, `course` = :course, `price_small` = :price_small, 
                      `price_medium` = :price_medium, `price_large` = :price_large, `description` = :description
                      WHERE `meals`.`id` = :id;');
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':course', $data['course']);
    $this->db->bind(':price_small', $data['price_small']);
    $this->db->bind(':price_medium', $data['price_medium']);
    $this->db->bind(':price_large', $data['price_large']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':id', $data['id']);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function updateImage($img, $id)
  {
    $this->db->query('UPDATE `meals` SET `image`= :img WHERE id = :id');
    $this->db->bind(':img', $img);
    $this->db->bind(':id', $id);
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

  public function getAllMenuEntries()
  {
    $this->db->query('SELECT
                          meals.id,
                          meals.image,
                          meals.name,
                          meals.course,
                          COUNT(orders_meals.id) AS sold,
                          meals.price_small,
                          meals.price_medium,
                          meals.price_large
                      FROM
                          `orders_meals`
                      RIGHT JOIN `meals` ON orders_meals.meals_id = meals.id
                      GROUP BY meals.id');
    $results = $this->db->resultSet();
    return $results;
  }

  public function getMenuInformation($id)
  {
    $this->db->query('SELECT * FROM `meals` WHERE `meals`.`id` = :id');
    $this->db->bind(':id', $id);
    $row = $this->db->single();
    return $row;
  }
}
