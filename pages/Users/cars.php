
	<!-- Header -->
	<div></div>
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
					<tabIndicator id="carInfoTab">
				</div>
				<div class="car-rental-tabs">
					<div>
						<h6>3</h6>
						<p>Checkout</p>
					</div>
					<tabIndicator id="carCheckoutTab">
				</div>
				<div class="car-rental-tabs">
					<div>
						<h6>4</h6>
						<p>Approval</p>
					</div>
					<tabIndicator id="carApprovalTab">
				</div>
			</div>

			<!-- Car Selection Tab -->
			<form onsubmit="reqAppointmentForm()" method="post" id="reqAppointmentForm">
			<div class="car-rental-selection-container" id="carSelection">
			<?php
			if (isset($_SESSION["user_id"])) {
				echo "<input type='hidden' id='appointorId' value='" . htmlspecialchars($_SESSION["user_id"], ENT_QUOTES, 'UTF-8') . "'>";
				// echo "<script>console.log('User ID: " . $_SESSION["user_id"] . "');</script>";
			} else {
				echo "<input type='hidden' id='appointorId' value=''>";
				// echo "<script>console.log('User ID not set');</script>";
			}
			echo  "<input type='hidden' id='car_rented_id' value=''>";	
			?>
				<div class="car-selection-filter-Container">
					<div class="car-selection-filter-buttons">
						<button class="car-selection-filter-btn active" onclick="filterCars('all')">All</button>
						<button class="car-selection-filter-btn" onclick="filterCars('Sedan')">Sedan</button>
						<button class="car-selection-filter-btn" onclick="filterCars('Suv')">SUV</button>
						<button class="car-selection-filter-btn" onclick="filterCars('Van')">Van</button>
					</div>
				</div>
				<div class="car-rental-selection">
					<div class="car-selection-grid" id="car-selection-grid">
					</div>
				</div>
			</div>

			<!-- Information Tab -->
			<div class="car-rental-info-container" id="carInfo">
				<div class="car-rental-header">
					<h1>Please fill the following</h1>
				</div>			
				<div class="car-rental-card">
					<div class="car-rental-info-content">
						<h2>Rent Period</h2>
						<div>
							<input name="fromDate" class="formInput" id="fromDate" type="date" placeholder="From: mm/dd/yyyy" noautocomplete>
							<input name="toDate" class="formInput" id="toDate" type="date" placeholder="To: mm/dd/yyyy" noautocomplete>
						</div>
						<h2>Government Issued ID</h2>
						<div style="display: flex; align-items: center;">
							<div class="file-upload">
								<span>Choose a File</span>
								<input name="gov_ID" type="file" id="gov_ID">
							</div>
							<span id="govID-file-name">File Name</span>
						</div>
						
						<p id="car-rental-info-fillOutSpacer" style="opacity: 0;">SPACE</p>
						<p class="error" id="error-message" style="display: none;">The "To" date must be later than or equal to the "From" date.</p>
						<p id="car-rental-info-fillOut" style="display: none;">Please fill out the form!</p>
					</div>	
					<div class="car-rental-footer">
						<a id="returnCarSelection">Return</a>
						<a id="submitCarInfo">Proceed</a>
					</div>
				</div>
			</div>

			<!-- Checkout Tab -->
			<div class="car-rental-checkout-container" id="carCheckout">
				<div class="car-rental-header">
					<h1>Payment Information</h1>
				</div>	
				<div class="car-rental-card">
					<div class="car-rental-checkout-content">
						<label for="cardHolderName">Cardholder Name</label>
						<input name="cardHolderName" id="cardHolderName" class="formInput" type="text" placeholder="Cardholder Name" noautocomplete>
						<label for="cardNumber">Card Number</label>
						<input name="cardNumber" id="cardNumber" class="formInput" type="text" placeholder="Card Number" noautocomplete>
						<label for="expiryDate">Expiration Date</label>
						<input name="expiryDate" id="expiryDate" class="formInput" type="date" placeholder="Expiration Date" noautocomplete>
						<label for="cvv_cvc">CVV/CVC Code</label>
						<input name="cvv_cvc" id="cvv_cvc" class="formInput" type="text" placeholder="CVV/CVC Code" noautocomplete>
						<label for="billAddress">Billing Address</label>
						<input name="billAddress" id="billAddress" class="formInput" type="text" placeholder="Billing Address" noautocomplete>
						<p id="car-rental-info-fillOutSpacer" style="opacity: 0;">SPACE</p>
						<p id="car-rental-info-fillOut" style="display: none;">Please fill out the form!</p>
					</div>
					<div class="car-rental-footer">
						<a id="returnCarInfo">Return</a>
						<button id="confirmCheckout">Confirm</button>
					</div>
				</div>
			</div>
			</form>

			<!-- Approval Tab -->
			<div class="car-rental-approval-container" id="carApproval">
				<img src="./assets/icons/okay.png" alt="Done">
				<h3>Your request has been processed.</h3>
				<h3>Wait within 24 hours for your request to be approved. Thank you!</h3>
				<a href="<?php echo $rootDirectory?>">Home</a>
			</div>

		</div>
		
	</div>

</div>

