<?php
$getAllCarsSql = "SELECT * FROM cars;";
$resultgetAllCars = $conn->query($getAllCarsSql);

$carSelectedId = 0;
if (isset($_SESSION["user_id"])) {
	$userId = $_SESSION['user_id'];
} else {
	$userId = "No User";
}

$fromDate = 0;
$toDate = 0;
$govId = 0;
$cardName = 0;
$cardNumber = 0;
$cardExp = 0;
$cardCode = 0;
$cardBIlling = 0;

if (isset($_POST["infoBack"])) {
	echo "<script>window.location.href='./cars';</script>";
}

?>
<!-- Container -->
<div class="carpagebg">
	<div class="car-rental-page">
		<div class="car-rental-tabContainer">
			<div class="car-rental-tabs">
				<div>
					<h6>1</h6>
					<p>Select a Car</p>
				</div>
				<tabIndicator class="active" id="carSelectionTab">
			</div>
			<div class="car-rental-tabs">
				<div>
					<h6>2</h6>
					<p>Information</p>
				</div>
				<?php 
				if (isset($_POST["infoProceed"]) || isset($_POST["selectCarBtn"]) || isset($_POST["paymentConfirm"])) {
					echo <<<HTML
								<tabIndicator class="active" id="carSelectionTab">
								HTML;
				} else {
					echo <<<HTML
								<tabIndicator id="carCheckoutTab">
								HTML;
				}
				?>
			</div>
			<div class="car-rental-tabs">
				<div>
					<h6>3</h6>
					<p>Checkout</p>
				</div>
				<?php 
				if (isset($_POST["infoProceed"]) || isset($_POST["paymentConfirm"])) {
					echo <<<HTML
								<tabIndicator class="active" id="carSelectionTab">
								HTML;
				} else {
					echo <<<HTML
								<tabIndicator id="carCheckoutTab">
								HTML;
				}
				?>
			</div>
			<div class="car-rental-tabs">
				<div>
					<h6>4</h6>
					<p>Approval</p>
				</div>
				<?php 
				if (isset($_POST["paymentConfirm"])) {
					echo <<<HTML
								<tabIndicator class="active" id="carSelectionTab">
								HTML;
				} else {
					echo <<<HTML
								<tabIndicator id="carCheckoutTab">
								HTML;
				}
				?>
			</div>
		</div>

		<?php
		if (isset($_POST["selectCarBtn"]) || isset($_POST["isLoggedf"])) {
			$_SESSION["carSelectedId"] = $_POST["carId"];
			echo <<<HTML
						<!-- Information Tab -->
						<div class="car-rental-info-container" id="carInfo">
							<div class="car-rental-header">
								<h1>Please fill the following</h1>
							</div>
							<div class="car-rental-card">
								<form action="" method="POST">
									<div class="car-rental-info-content">
										<h2>Rent Period</h2>
										<div>
											<label for="fromDate">From:</label>
											<input required name="fromDate" class="formInput" id="fromDate" type="date" placeholder="From: mm/dd/yyyy"
												noautocomplete>
											<label for="toDate">To:</label>
											<input required name="toDate" class="formInput" id="toDate" type="date" placeholder="To: mm/dd/yyyy"
												noautocomplete>
										</div>
										
										</div>

										<p id="car-rental-info-fillOutSpacer" style="opacity: 0;">SPACE</p>
										<p class="error" id="error-message" style="display: none;">The "To" date must be later than the
											"From" date.</p>
										
										<div class="car-rental-footer">
											<button type="button" id="returnCarSelection" name="infoBack" onclick="window.location.href='./cars'">Back</button>
											<button type="submit" id="submitCarInfo" name="infoProceed">Proceed</button>
										</div>
									</div>
									
								</form>
							</div>
						</div>
						HTML;
		} else if (isset($_POST["paymentConfirm"])) {
			$cardName = $_POST["cardHolderName"];
			$cardNumber = $_POST["cardNumber"];
			$cardExp = $_POST["expiryDate"];
			$cardCode = $_POST["cvv_cvc"];
			$cardBilling = $_POST["billAddress"];
			$paymentInfo = [$cardName, $cardNumber, $cardExp, $cardCode, $cardBilling];
			$payment = json_encode($paymentInfo);
			$fromDate =  $_SESSION["fromDate"];
			$toDate = $_SESSION["toDate"];
			$carId = $_SESSION["carSelectedId"];
			$status = "Pending";
			$date1 = new DateTime($fromDate);
			$date2 = new DateTime($toDate);
			$interval = $date1->diff($date2);
			$daysRented = (int)  $interval->format('%a');

			

			$appointmentStmt = $conn -> prepare("INSERT INTO appointments (appointment_toDate, appointment_fromDate, appointor_id, car_rented_id, payment_info, appointmentStatus, priceMultiplyer) VALUES (?, ?, ?, ?, ?, ?, ?);");
			if (!$appointmentStmt) {
				die("Prepare failed: " . $conn->error);
			}
			$appointmentStmt -> bind_param("ssiissi", $toDate, $fromDate, $userId, $carId, $payment, $status, $daysRented);

			$appointmentStmt->execute();
		
			$appointmentStmt->close();
			
			
			echo <<<HTML
								<!-- Approval Tab -->
							<div class="car-rental-approval-container" id="carApproval">
								<img src="./assets/icons/okay.png" alt="Done">
								<h3>Your request has been processed.</h3>
								<h3>Wait within 24 hours for your request to be approved. Thank you!</h3>
								<a id="backHome">Home</a>
							</div>
							HTML;

		} else if (isset($_POST["infoProceed"])) {
			$_SESSION["fromDate"] = $_POST["fromDate"];
			$_SESSION["toDate"] = $_POST["toDate"];

			echo <<<HTML
							<!-- Checkout Tab -->
						<form action="" method="POST">
							<div class="car-rental-checkout-container" id="carCheckout" style="display: block;">
								<div class="car-rental-header">
									<h1>Payment Information</h1>
								</div>
								<div class="car-rental-card">
									<div class="car-rental-checkout-content">
										<label for="cardHolderName">Cardholder Name</label>
										<input required name="cardHolderName" id="cardHolderName" class="formInput" type="text" placeholder="Cardholder Name"
											noautocomplete>
										<label for="cardNumber">Card Number</label>
										<input required name="cardNumber" id="cardNumber" class="formInput" type="number" placeholder="Card Number"
											noautocomplete>
										<label for="expiryDate">Expiration Date</label>
										<input required name="expiryDate" id="expiryDate" class="formInput" type="date" placeholder="Expiration Date"
											noautocomplete>
										<label for="cvv_cvc">CVV/CVC Code</label>
										<input required name="cvv_cvc" id="cvv_cvc" class="formInput" type="number" placeholder="CVV/CVC Code" noautocomplete>
										<label for="billAddress">Billing Address</label>
										<input required name="billAddress" id="billAddress" class="formInput" type="text" placeholder="Billing Address"
											noautocomplete>
										<p id="car-rental-info-fillOutSpacer" style="opacity: 0;">SPACE</p>
										<p id="car-rental-info-fillOut" style="display: none;">Please fill out the form!</p>
									</div>
									<div class="car-rental-footer">
										<button type="button" name="paymentBack" id="returnCarInfo" onclick="window.location.href='./cars'">Back</button>
										<button type="submit" name="paymentConfirm" id="confirmCheckout">Confirm</button>
									</div>
								</div>
							</div>
						</form>
						HTML;
		} else {
			echo <<<HTML
							<form onsubmit="reqAppointmentForm()" method="post" id="reqAppointmentForm">
							<div class="car-rental-selection-container" id="carSelection">
								<div class="car-selection-filter-Container">
									<div class="car-selection-filter-buttons">
										<button class="car-selection-filter-btn active" onclick="filterCars('all')">All</button>
										<button class="car-selection-filter-btn" onclick="filterCars('Sedan')">Sedan</button>
										<button class="car-selection-filter-btn" onclick="filterCars('SUV')">SUV</button>
										<button class="car-selection-filter-btn" onclick="filterCars('Van')">Van</button>
									</div>
								</div>
								<div class="car-rental-selection">
									<div class="car-selection-grid" id="car-selection-grid">
						HTML;
			while ($row = $resultgetAllCars->fetch_assoc()) {
				// Build the data URI for the image.
				// This assumes that your database row has fields 'car_image' and 'image_type'
				$imgSrc = 'data:' . $row['car_image_mime'] . ';base64,' . base64_encode($row['car_image']);

				echo <<<HTML
									<div class="car-selection-card {$row['type']}">
											<div class="car-selection-carName">
													<h2>{$row["car_name"]}</h2>
													<h3>{$row["brand"]}</h3>
											</div>
											<div class="car-selection-icons">
													<img src="./assets/icons/CarCards/car-seat.png" alt="Seat">
													<p>{$row["capacity"]}</p>
													<img src="./assets/icons/CarCards/luggage.png" alt="Capacity">
													<p>{$row["luggage"]} kg</p>
													<img src="./assets/icons/CarCards/manual-transmission.png" alt="Transmission">
													<p>{$row["transmission"]}</p>
											</div>
											<div class="car-selection-img">
													<img src="$imgSrc" alt="{$row['car_name']}">
											</div>
											<div class="car-selection-select">
													<p>₱{$row['price']}</p>
													<form action="" method="post">
														<input type="number" name="carId" value="{$row['car_id']}" hidden/>
														<button type="submit" name="selectCarBtn">Select</button>
													</form>
											</div>
									</div>
					HTML;
			}
		}

		echo <<<HTML
					</div>
						</div>
					</div>
					HTML;

		?>

	

			
			

		

	</div>

</div>

</div>