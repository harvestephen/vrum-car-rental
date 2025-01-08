<?php
include("../../connection/connection.php");

$usernames = array();
$emails = array();;

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
  global $usernames;
  global $emails;
  //get data from the database
  $query = "SELECT * FROM users;";
  $result = $conn -> query($query);
  if ($result -> num_rows > 0) {
    while($row = $result -> fetch_assoc()) {
      array_push($usernames, $row["username"]);
      array_push($emails, $row["email"]);
    }
  } else {
    echo "0 results";
  }
}
header("Content-Type: application/json");
http_response_code(200);
$data = new stdClass();
$data -> username = $usernames;
$data -> email = $emails;
echo json_encode($data);