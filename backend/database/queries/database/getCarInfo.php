<?php
include("../../connection/connection.php");

$carInfo = array();

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    global $carInfo;
    //get data from the database
    $query = "SELECT * FROM cars;";
    $result = $conn -> query($query);

    if ($result -> num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
            $rowData = new stdClass();
            $rowData -> car_id = $row["car_id"];
            $rowData -> car_name = $row["car_name"];
            $rowData -> renter_id = $row["renter_id"];
            $rowData -> car_type = $row["type"];
            $rowData -> transmission = $row["transmission"];
            $rowData -> capacity = $row["capacity"];
            $rowData -> luggage = $row["luggage"];
            $rowData -> review = $row["review"];
            $rowData -> brand = $row["brand"];
            $rowData -> Qnty = $row["Qnty"];
            $rowData -> available = $row["available"];

            if (!empty($row["car_image"])) {
                $rowData-> car_image = base64_encode($row["car_image"]); // Convert BLOB to base64 string
                $rowData -> car_image_mime = $row["car_image_mime"];
            } else {
                $rowData-> car_image = null;
                $rowData->car_image_mime = null;
            }
            array_push($carInfo, $rowData);
        } 

        header('Content-Type: application/json');
        echo json_encode($carInfo);

    } else {
        echo json_encode(["message" => "No results found"]);
        echo "0 results";
    }
    
}