<?php $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory ?>
<!-- Add Car Modal -->
<div id="addCarModal" class="modal">
    <div class="addCarModalBox">
        <h2 class="termsModalHeader">Add Car</h2>
        <form class="modalForm" id="addCarForm">
            <label for="car-name">Car Name</label>
                <input type="text" id="car-name" placeholder="Car Name" />
            
            <label for="carTransmission">Transmission</label>
            <select id="carTransmission">
                <option value="">Select Transmission</option>
                <option value="automatic">Automatic</option>
                <option value="manual">Manual</option>
            </select>

            <label for="carType">Type</label>
            <select id="carType">
                <option value="">Select Type</option>
                <option value="sedan">Sedan</option>
                <option value="suv">SUV</option>
                <option value="truck">Truck</option>
            </select>

            <div class="modalFooter">
                <button class="addBtn" onclick="addCar()">Add</button>
                <button class="cancelBtn" onclick="closeModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>
