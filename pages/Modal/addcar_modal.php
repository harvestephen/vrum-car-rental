<?php $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory ?>
<!-- Add Car Modal -->
<div id="addCarModal" class="modal">
    <div class="addCarModalBox">
        <h2 class="termsModalHeader">Add Car</h2>
        <form class="modalForm" id="addCarForm">
            <div>
                <input class="carName" type="text" placeholder="Car Name" />
            </div>

            <div>
                <select id="carTransmission">
                    <option value="">Select Transmission</option>
                    <option value="automatic">Automatic</option>
                    <option value="manual">Manual</option>
                </select>
            </div>

            <div>
                <select id="carType">
                    <option value="">Select Type</option>
                    <option value="sedan">Sedan</option>
                    <option value="suv">SUV</option>
                    <option value="truck">Truck</option>
                </select>
            </div>

            <div class="modalFooter">
                <button class="addBtn" onclick="addCar()">Add</button>
                <button class="cancelBtn" onclick="closeModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>
