<?php
include "../../../connection/connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Read form data
  $appointment_title = "test";
  $appointment_fromDate = $_POST["fromDate"];
  $appointment_toDate = $_POST["toDate"];
  $appointor_id = $_POST["appointorId"];
  $car_rented_id = $_POST["car_rented_id"];

  // Payment Info Array
  $payment_info_array = array(
      "cardHolderName" => $_POST["cardHolderName"],
      "cardNumber" => $_POST["cardNumber"],
      "expiryDate" => $_POST["expiryDate"],
      "cvv_cvc" => $_POST["cvv_cvc"],
      "billAddress" => $_POST["billAddress"]
  );

  $payment_info = json_encode($payment_info_array);

  // Handling file upload (BLOB storage)
  if (isset($_FILES["gov_ID"]) && $_FILES["gov_ID"]["error"] === 0) {
      $gov_ID = file_get_contents($_FILES["gov_ID"]["tmp_name"]); // Read file as binary
  } else {
      die("Error: gov_ID file is missing or invalid.");
  }

  // Database connection (assuming $conn is already defined)
  $query = "INSERT INTO appointments (appointment_title, appointment_fromDate, appointment_toDate, appointor_id, car_rented_id, payment_info, gov_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("sssiiss", $appointment_title, $appointment_fromDate, $appointment_toDate, $appointor_id, $car_rented_id, $payment_info, $gov_ID);

  if ($stmt->execute()) {
      echo "Data inserted successfully";
  } else {
      echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}