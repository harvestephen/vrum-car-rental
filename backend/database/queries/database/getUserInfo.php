<?php
include("../../connection/connection.php");

$userInfo = array();

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
  global $userInfo;
  //get data from the database
  $query = "SELECT * FROM users;";
  $result = $conn -> query($query);
  if ($result -> num_rows > 0) {
    while($row = $result -> fetch_assoc()) {
      $rowData = new stdClass();
      $rowData -> id = $row["user_id"];
      $rowData -> username = $row["username"];
      $rowData -> role = $row["role"];
      $rowData -> password = $row["password"];
      $rowData -> email = $row["email"];
      array_push($userInfo, $rowData);
    }
  } else {
    echo "0 results";
  }
}
header("Content-Type: application/json");
http_response_code(200);
echo json_encode($userInfo);