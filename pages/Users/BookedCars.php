<div class="wrapper">
<div class="BookedCarspage">
    <div class="BookingPage">
    <div class="Booking-header">
        <h1>BOOKED CARS</h1>
    </div>
    <div class="booking-car-selection-container" id="bookingCarSelection">
        <div class="booking-car-filter-container">
        <div class="booking-car-filter-buttons">
            <button class="booking-car-filter-btn active" onclick="filterBookingCars('all')">All</button>
            <button class="booking-car-filter-btn" onclick="filterBookingCars('pending')">Pending</button>
            <button class="booking-car-filter-btn" onclick="filterBookingCars('approved')">Approved</button>

        </div>
        </div>
        <div class="booking-car-rental-selection">
        <div class="bookingheader">
            <h2 id="filterHeader" class="filter-header">All Cars</h2>
        </div>
        <div class="booking-car-grid">
            <!-- Card Example -->
            
            <div class="booking-car-card pending">
            <div class="booking-car-row">
            <div class="booking-car-image">
                <img src="./assets/images/cars/sedan/toyota/gr86.png" alt="Car Image">
            </div>
                <div class="booking-car-right">Car Name</div>
                <div class="booking-car-column">Waiting for approval</div>
                <div class="booking-car-right">₱8000.00</div>
                <div class="booking-car-column"><button disabled>Pending</button></div>
            </div>
            </div>
            <div class="booking-car-card approved">
            <div class="booking-car-row">
            <div class="booking-car-image">
                <img src="./assets/images/cars/sedan/toyota/gr86.png" alt="Car Image">
            </div>
                <div class="booking-car-right">Car Name</div>
                <div class="booking-car-column">Ready for rent</div>
                <div class="booking-car-right">₱12000.00</div>
                <div class="booking-car-column"><button>Select</button></div>
            </div>
            </div>
            <div class="booking-car-card pending">
            <div class="booking-car-row">
            <div class="booking-car-image">
                <img src="./assets/images/cars/sedan/toyota/gr86.png" alt="Car Image">
            </div>
                <div class="booking-car-right">Car Name</div>
                <div class="booking-car-column">Waiting for approval</div>
                <div class="booking-car-right">₱9000.00</div>
                <div class="booking-car-column"><button disabled>Pending</button></div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
