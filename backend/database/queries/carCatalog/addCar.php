<?php

//access all variables and functions in connection.php as if the connection.php is written here

if(isset($_POST["addcarsubmit"])){
  // create variables from $_POST['name attribute']
  $carName = $_POST["carName"];
  $carTransmission = $_POST["carTransmission"];
  $carType = $_POST["carType"];
  $carQnty = $_POST["carQuantity"];
  $carBrand = $_POST["carBrand"];
  $carCapacity = $_POST["carCapacity"];

  $stmt = $conn -> prepare("INSERT INTO cars (`car_name`, `type`, `transmission`, `capacity`, `brand`, `Qnty`) VALUES (?, ?, ?, ?, ?, ?)");
  //database logic to add items
  $stmt -> bind_param("sssisi", $carName, $carType, $carTransmission, $carCapacity, $carBrand, $carQnty);
  $stmt -> execute();
  echo "<script>window.location.href='./adminCars';</script>";
}