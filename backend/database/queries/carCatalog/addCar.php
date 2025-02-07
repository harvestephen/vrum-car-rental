<?php

//access all variables and functions in connection.php as if the connection.php is written here

if (isset($_POST["addcarsubmit"])) {
  // Retrieve other form fields
  $carName         = $_POST["carName"];
  $carTransmission = $_POST["carTransmission"];
  $carType         = $_POST["carType"];
  $carQnty         = $_POST["carQuantity"];
  $carBrand        = $_POST["carBrand"];
  $carCapacity     = $_POST["carCapacity"];
  
  // Use the correct superglobal $_FILES
  // Get the image's MIME type and temporary file path
  $carImageType    = $_FILES["carImage"]["type"];  
  $carImageTmp     = $_FILES["carImage"]["tmp_name"];
  
  // Read the image binary data
  $carImageData    = file_get_contents($carImageTmp);
  
  // Prepare an SQL statement to store the image as binary data (BLOB)
  $stmt = $conn->prepare("INSERT INTO cars (car_name, type, transmission, capacity, brand, Qnty, car_image, car_image_mime) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  if (!$stmt) {
      die("Prepare failed: " . $conn->error);
  }
  
  // For BLOB data, use "b" in bind_param
  // Here, the order of type specifiers is:
  // s (car_name), s (type), s (transmission), i (capacity), s (brand), i (Qnty), b (car_image), s (image_type)
  $null = NULL;  // a placeholder for the blob data
  $stmt->bind_param("sssissbs", $carName, $carType, $carTransmission, $carCapacity, $carBrand, $carQnty, $null, $carImageType);
  
  // Use send_long_data() for the BLOB parameter (the parameter index is 6, since it's the 7th parameter, 0-indexed)
  $stmt->send_long_data(6, $carImageData);
  
  // Execute the statement
  if ($stmt->execute()) {
      echo "Image uploaded and stored in the database successfully!";
  } else {
      echo "Error: " . $stmt->error;
  }
  
  $stmt->close();
}
$conn->close();

echo "<script>window.location.href='./adminCars';</script>";