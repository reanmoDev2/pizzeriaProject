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
                          orders_customers.status = 'In Bearbeitung'");
    return $this->db->resultSet();
  }
}
