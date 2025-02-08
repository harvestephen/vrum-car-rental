<?php

$stmt = $conn->prepare("SELECT * FROM appointments JOIN cars ON appointments.car_rented_id = cars.car_id JOIN users ON appointments.appointor_id = users.user_id WHERE appointor_id = ?;");
$stmt->bind_param("s", $userId);
$stmt->execute();
$res = $stmt->get_result();

if (isset($_POST["return"])) {
    $carReturnId = $_POST["carId"];
    $available = $_POST["available"] + 1;
    $appointmentId = $_POST["appId"];

    $stmtReturn = $conn->prepare("UPDATE `cars` SET `available` = ? WHERE `car_id` = ?;");
    $stmtReturn->bind_param("ii", $available, $carReturnId);
    $stmtReturn->execute();

    $stmtReturn = $conn->prepare("UPDATE `appointments` SET `appointment_done` = '2' WHERE `appointment_id` = ?;");
    $stmtReturn->bind_param("i", $appointmentId);
    $stmtReturn->execute();

    echo "<script>window.location.href='./book';</script>";
}
?>
<div class="wrapper">
    <div class="BookedCarspage">
        <div class="BookingPage">
            <div class="booking-car-selection-container" id="bookingCarSelection">
                <div class="booking-car-filter-container">
                </div>
                <div class="booking-car-rental-selection">
                    <div class="bookingheader">
                        <h2 id="filterHeader" class="filter-header">All Cars</h2>
                    </div>
                    <div class="booking-car-grid">
                        <?php
                        while ($row = $res->fetch_assoc()) {
                            $price = $row["price"] * $row["priceMultiplyer"];
                            if ($row["appointment_done"] === 0) {
                                echo <<<HTML
                                    <div class="booking-car-card pending">
                                        
                                            <div class="booking-car-row">
                                                    <div class="booking-car-right">{$row["car_name"]}</div>
                                                    <div class="booking-car-column">{$row["appointmentStatus"]}</div>
                                                    <div class="booking-car-right">₱{$price}</div>
                                                    <div class="booking-car-right">{$row["priceMultiplyer"]}</div>
                                                    
                                                    
                                                    <div class="booking-car-columns"><button >Return</button></div>
                                            </div>
                                        
                                    </div>
                                    HTML;
                            } else if ($row["appointment_done"] === 2 || $row["appointmentStatus"]) {
                                echo <<<HTML
                                    <div class="booking-car-card pending">
                                        <div class="booking-car-row">
                                            <div class="booking-car-right">{$row["car_name"]}</div>
                                            <div class="booking-car-column">{$row["appointmentStatus"]}</div>
                                            <div class="booking-car-right">₱{$price}</div>
                                            <div class="booking-car-right">{$row["priceMultiplyer"]}</div>
                                           
                                            <div class="booking-car-right">Done</div>
                                        </div>
                                    </div>
                                    HTML;
                            } else if ($row["appointment_done"] === 1) {
                                echo <<<HTML
                                <div class="booking-car-card pending">
                                <form action="" method="POST">
                                    <div class="booking-car-row">
                                        <div class="booking-car-right">{$row["car_name"]}</div>
                                        <div class="booking-car-column">{$row["appointmentStatus"]}</div>
                                        <div class="booking-car-right">₱{$price}</div>
                                        <div class="booking-car-right">{$row["priceMultiplyer"]}</div>
                                        
                                        <div class="booking-car-column"><button name="return" type="submit">Return</button></div>
                                        <input name="carId" hidden type="number" value="{$row['car_id']}"/>
                                        <input name="appId" hidden type="number" value="{$row['appointment_id']}"/>
                                        <input name="available" hidden type="number" value="{$row['available']}"/>
                                    </div>
                                    </form>
                                </div>
                                HTML;
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>