<?php
class Dashboard
{
  public $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getSales($order = 'DESC')
  {
    $this->db->query('SELECT SUM(orders.sales) AS sales, meals.name FROM `orders` 
                      RIGHT JOIN meals ON meals.id = orders.meals_id group by meals.name order by sales ' . $order);
    $results = $this->db->resultSet();
    return $results;
  }

  public function getSold($order = "DESC")
  {
    $this->db->query('SELECT
                          SUM(orders.sales) AS sales,
                          meals.name,
                          COUNT(meals.id) AS amount
                      FROM
                          `orders`
                      RIGHT JOIN meals ON meals.id = orders.meals_id
                      GROUP BY
                          meals.name  
                      ORDER BY `amount` ' . $order . ', sales ' . $order);
    $results = $this->db->resultSet();
    return $results;
  }
}
