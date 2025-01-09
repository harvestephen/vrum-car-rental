
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
				<div class="car-selection-filter-Container">
					<div class="car-selection-filter-buttons">
						<button class="car-selection-filter-btn active" onclick="filterCars('all')">All</button>
						<button class="car-selection-filter-btn" onclick="filterCars('sedan')">Sedan</button>
						<button class="car-selection-filter-btn" onclick="filterCars('suv')">SUV</button>
						<button class="car-selection-filter-btn" onclick="filterCars('van')">Van</button>
					</div>
				</div>
				<div class="car-rental-selection">
					<div class="car-selection-grid">

						<div class="car-selection-card sedan">
							<div class="car-selection-carName">
								<h2>Car Name</h2>
								<h3>Description</h3>
							</div>
							<div class="car-selection-icons">
								<img src="./assets/icons/CarCards/car-seat.png" alt="Seat">
								<p>4</p>
								<img src="./assets/icons/CarCards/luggage.png" alt="Capacity">
								<p>1</p>
								<img src="./assets/icons/CarCards/manual-transmission.png" alt="Transmission">
								<p>Manual</p>
							</div>
							<div class="car-selection-img">
								<img src="./assets/images/cars/sedan/toyota/gr86.png" alt="Sedan">
							</div>
							<div class="car-selection-select">
								<p>₱10000.00</p>
								<a name="carToRent" class="carToRent">Select</a>
							</div>
						</div>

						<div class="car-selection-card suv">
							<div class="car-selection-carName">
								<h2>Car Name</h2>
								<h3>Description</h3>
							</div>
							<div class="car-selection-icons">
								<img src="./assets/icons/CarCards/car-seat.png" alt="Seat">
								<p>4</p>
								<img src="./assets/icons/CarCards/luggage.png" alt="Luggage">
								<p>1</p>
								<img src="./assets/icons/CarCards/manual-transmission.png" alt="Transmission">
								<p>Manual</p>
							</div>
							<div class="car-selection-img">
								<img src="./assets/images/cars/sedan/toyota/gr86.png" alt="Sedan">
							</div>
							<div class="car-selection-select">
								<p>₱10000.00</p>
								<button class="carToRent">Select</button>
							</div>
						</div>

						<div class="car-selection-card suv">
							<div class="car-selection-carName">
								<h2>Car Name</h2>
								<h3>Description</h3>
							</div>
							<div class="car-selection-icons">
								<img src="./assets/icons/CarCards/car-seat.png" alt="Seat">
								<p>4</p>
								<img src="./assets/icons/CarCards/luggage.png" alt="Luggage">
								<p>1</p>
								<img src="./assets/icons/CarCards/manual-transmission.png" alt="Transmission">
								<p>Manual</p>
							</div>
							<div class="car-selection-img">
								<img src="./assets/images/cars/sedan/toyota/gr86.png" alt="Sedan">
							</div>
							<div class="car-selection-select">
								<p>₱10000.00</p>
								<button class="carToRent">Select</button>
							</div>
						</div>

						<div class="car-selection-card sedan">
							<div class="car-selection-carName">
								<h2>Car Name</h2>
								<h3>Description</h3>
							</div>
							<div class="car-selection-icons">
								<img src="./assets/icons/CarCards/car-seat.png" alt="Seat">
								<p>4</p>
								<img src="./assets/icons/CarCards/luggage.png" alt="Luggage">
								<p>1</p>
								<img src="./assets/icons/CarCards/manual-transmission.png" alt="Transmission">
								<p>Manual</p>
							</div>
							<div class="car-selection-img">
								<img src="./assets/images/cars/sedan/toyota/gr86.png" alt="Sedan">
							</div>
							<div class="car-selection-select">
								<p>₱10000.00</p>
								<button class="carToRent">Select</button>
							</div>
						</div>

						<div class="car-selection-card sedan">
							<div class="car-selection-carName">
								<h2>Car Name</h2>
								<h3>Description</h3>
							</div>
							<div class="car-selection-icons">
								<img src="./assets/icons/CarCards/car-seat.png" alt="Seat">
								<p>4</p>
								<img src="./assets/icons/CarCards/luggage.png" alt="Luggage">
								<p>1</p>
								<img src="./assets/icons/CarCards/manual-transmission.png" alt="Transmission">
								<p>Manual</p>
							</div>
							<div class="car-selection-img">
								<img src="./assets/images/cars/sedan/toyota/gr86.png" alt="Sedan">
							</div>
							<div class="car-selection-select">
								<p>₱10000.00</p>
								<button class="carToRent">Select</button>
							</div>
						</div>

						<div class="car-selection-card van">
							<div class="car-selection-carName">
								<h2>Car Name</h2>
								<h3>Description</h3>
							</div>
							<div class="car-selection-icons">
								<img src="./assets/icons/CarCards/car-seat.png" alt="Seat">
								<p>4</p>
								<img src="./assets/icons/CarCards/luggage.png" alt="Luggage">
								<p>1</p>
								<img src="./assets/icons/CarCards/manual-transmission.png" alt="Transmission">
								<p>Manual</p>
							</div>
							<div class="car-selection-img">
								<img src="./assets/images/cars/sedan/toyota/gr86.png" alt="Sedan">
							</div>
							<div class="car-selection-select">
								<p>₱10000.00</p>
								<button name="carToRent" class="carToRent">Select</button>
							</div>
						</div>
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
						<p class="error" id="error-message" style="display: none;">The "To" date must be later than or equal to the "From" date.</p>

						<h2>Government Issued ID</h2>
						<div>
							<input name="gov_ID" type="file" id="idFile" placeholder="Choose a File">
						</div>
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
						<input name="cardHoldername" class="formInput" type="text" placeholder="Cardholder Name" noautocomplete>
						<input name="cardNumber" class="formInput" type="text" placeholder="Card Number" noautocomplete>
						<input name="expiryDate" class="formInput" type="text" placeholder="Expiration Date" noautocomplete>
						<input name="cvv_cvc" class="formInput" type="text" placeholder="CVV/CVC Code" noautocomplete>
						<input name="billAddress" class="formInput" type="text" placeholder="Billing Address" noautocomplete>
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

