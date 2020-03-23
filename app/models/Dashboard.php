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
    $this->db->query('SELECT SUM(orders_meals.sales) AS sales, meals.name FROM `orders_meals` 
                      RIGHT JOIN meals ON meals.id = orders_meals.meals_id group by meals.name order by sales ' . $order);
    $results = $this->db->resultSet();
    return $results;
  }

  public function getSold($order = "DESC")
  {
    $this->db->query('SELECT
                          SUM(orders_meals.sales) AS sales,
                          meals.name,
                          COUNT(meals.id) AS amount
                      FROM
                          `orders_meals`
                      RIGHT JOIN meals ON meals.id = orders_meals.meals_id
                      GROUP BY
                          meals.name  
                      ORDER BY `amount` ' . $order . ', sales ' . $order);
    $results = $this->db->resultSet();
    return $results;
  }

  public function getChartData()
  {
    $this->db->query('SELECT
                          SUM(orders_meals.sales) AS sales
                      FROM
                          `orders_meals`
                      LEFT JOIN orders_customers ON orders_customers.id = orders_meals.orders_customers_id
                      WHERE
                          YEAR(orders_customers.ordered_at) = 2020 AND orders_customers.status = "Bezahlt"
                      GROUP BY
                          MONTH(orders_customers.ordered_at)
                      ORDER BY
                          MONTH(orders_customers.ordered_at) ASC');
    $results = $this->db->resultSet();
    $final = [];
    foreach ($results as $result) {
      array_push($final, floatval($result->sales));
    }
    return $final;
  }
}
