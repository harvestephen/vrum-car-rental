<?php

//access all variables and functions in connection.php as if the connection.php is written here
include "../../../connection/connection.php";

if(isset($_POST)){
  // create variables from $_POST['name attribute']

  if(isset($_POST)){
    $rawData = file_get_contents("php://input");
    $data = json_decode($rawData, true);

    $payment_info_array = array(
      "cardHolderName" => $data["cardHolderName"],
      "cardNumber" => $data["cardNumber"],
      "expiryDate" => $data["expiryDate"],
      "cvv_cvc" => $data["cvv_cvc"],
      "billAddress" => $data["billAddress"],
    );
  
    $appointment_title = "test";
    $appointment_fromDate = $data["fromDate"];
    $appointment_toDate = $data["toDate"];
    $appointor_id = $data["appointorId"];
    $car_rented_id = 1;
    $payment_info = json_encode($payment_info_array);
    $gov_id = ["gov_ID"];

    
    $query = "INSERT INTO appointments (appointment_title, appointment_fromDate, appointment_toDate, appointor_id, car_rented_id, payment_info, gov_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn -> prepare($query);
    $stmt -> bind_param("sssiisb", $appointment_title, $appointment_fromDate, $appointment_toDate, $appointor_id, $car_rented_id, $payment_info, $gov_id);
    
    if($stmt -> execute()){
      echo "Data inserted successfully";
    } else {
      echo "Error: " . $stmt -> error;
    }
  }

  //database logic to add items
}