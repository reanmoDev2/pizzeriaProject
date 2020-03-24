<?php
class Order
{
  public $db;

  public function __construct()
  {

    $this->db = new Database;
  }

  public function getAllOrdersInProgress()
  {
    $this->db->query("SELECT
                          orders_customers.id,
                          meals.image,
                          customers.name AS customers_name,
                          customers.tel_nr,
                          orders_customers.ordered_at,
                          meals.name AS meals_name,
                          orders_meals.sales
                      FROM
                          `orders_meals`
                      LEFT JOIN orders_customers ON orders_meals.orders_customers_id = orders_customers.id
                      LEFT JOIN meals ON orders_meals.meals_id = meals.id
                      LEFT JOIN customers ON orders_customers.customers_id = customers.id
                      WHERE
                          orders_customers.status = 'In Bearbeitung'
                      ORDER BY
                          orders_customers.ordered_at ASC");
    return $this->db->resultSet();
  }

  public function getAllOrdersNew()
  {
    $this->db->query("SELECT
                          orders_customers.id,
                          meals.image,
                          customers.name AS customers_name,
                          customers.tel_nr,
                          orders_customers.ordered_at,
                          meals.name AS meals_name,
                          orders_meals.sales
                      FROM
                          `orders_meals`
                      LEFT JOIN orders_customers ON orders_meals.orders_customers_id = orders_customers.id
                      LEFT JOIN meals ON orders_meals.meals_id = meals.id
                      LEFT JOIN customers ON orders_customers.customers_id = customers.id
                      WHERE
                          orders_customers.status = 'Neu'
                      ORDER BY
                          orders_customers.ordered_at ASC");
    return $this->db->resultSet();
  }

  // update orders_customers (status)
  public function updateStatusById($orderId, $status)
  {
    $this->db->query('UPDATE `orders_customers` SET `status` = :status WHERE `orders_customers`.`id` = :id;');
    $this->db->bind(':status', $status);
    $this->db->bind(':id', $orderId);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // delete entry from orders_meals
  public function deleteOrderByID($orderId)
  {
    $this->db->query('DELETE FROM `orders_meals` WHERE `orders_customers_id`= :id');
    $this->db->bind(':id', $orderId);
    if ($this->db->execute())
      return true;
    else
      return false;
  }

  public function deleteOrderRequestByID($orderId)
  {
    $this->db->query('DELETE FROM `orders_customers` WHERE `id`= :id');
    $this->db->bind(':id', $orderId);
    if ($this->db->execute())
      return true;
    else
      return false;
  }

  public function cancelOrderByID($orderId, $newStatus = 'Storniert')
  {
    $this->updateStatusById($orderId, $newStatus);
    $this->deleteOrderByID($orderId);
  }

  public function payOrderByID($orderId, $newStatus = 'Bezahlt')
  {
    $this->updateStatusById($orderId, $newStatus);
  }

  public function denyOrderByID($orderId)
  {
    $this->deleteOrderByID($orderId);
    $this->deleteOrderRequestById($orderId);
  }
}
