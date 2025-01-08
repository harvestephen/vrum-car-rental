<?php

include "../../connection/connection.php";

if(isset($_POST)){
  $rawData = file_get_contents("php://input");
  $data = json_decode($rawData, true);

  $username = $data["username"];
  $password = $data["password"];
  $email = $data["email"];
  $phone = $data["phone"];
  $role = "role";
  
  $query = "INSERT INTO users (username, role, password, email, phone) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn -> prepare($query);
  $stmt -> bind_param("sssss", $username, $role, $password, $email, $phone);
  
  if($stmt -> execute()){
    echo "Data inserted successfully";
  } else {
    echo "Error: " . $stmt -> error;
  }
}