<?php

//access all variables and functions in connection.php as if the connection.php is written here
include "connection.php";

if(isset($_POST["addAppointment"])){
  // create variables from $_POST['name attribute']

  if(isset($_POST)){
    $rawData = file_get_contents("php://input");
    $data = json_decode($rawData, true);
  
    $carID = "test";
    $fromDate = $data["fromDate"];
    $toDate = $data["toDate"];
    $gov_ID = $data["gov_ID"];
    $cardHolderName = $data["cardHoldername"];
    $cardNumber = "cardNumber";
    $expiryDate = $data["expiryDate"];
    $cvv_cvc = $data["cvv_cvc"];
    $billAddress = $data["billAddress"];
    
    $query = "INSERT INTO ? (carID, fromDate, toDate, gov_ID, cardHolderName, cardNumber, expiryDate, cvv_cvc, billAddress) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn -> prepare($query);
    $stmt -> bind_param("sssss", $carID, $fromDate, $toDate, $gov_ID, $cardHolderName, $cardNumber, $expiryDate, $cvv_cvc, $billAddress);
    
    if($stmt -> execute()){
      echo "Data inserted successfully";
    } else {
      echo "Error: " . $stmt -> error;
    }
  }

  //database logic to add items
}