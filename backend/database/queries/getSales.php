<?php
include '../connection/connection.php';

$currentYear = date("Y");

$sql = "SELECT YEAR(sales_date_made) AS year, MONTH(sales_date_made) AS month, SUM(sales) AS total_sales FROM sales WHERE YEAR(sales_date_made) = " . $currentYear . " GROUP BY year, month ORDER BY month ASC;";

$result = $conn -> query($sql);

$data = [];

while ($row = $result -> fetch_assoc()) {
  array_push($data , $row);
}

echo json_encode($data);