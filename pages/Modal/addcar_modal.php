<?php $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory ?>
<!-- Add Car Modal -->
<div id="addCarModal" class="modal" style="display: none">
    <div class="addCarModalBox">
        <h2 class="termsModalHeader">Add Car</h2>
        <form class="modalForm" id="addCarForm" action="<?php echo $rootDirectory ."/addcar"?>" method="post" enctype="multipart/form-data">
            <div>
                <input class="carName" type="text" placeholder="Car Name" name="carName"/>
            </div>

            <div>
                <select id="carTransmission" name="carTransmission">
                    <option value="">Select Transmission</option>
                    <option value="automatic">Automatic</option>
                    <option value="manual">Manual</option>
                    <option value="manual">Automatic/Manual</option>
                </select>
            </div>

            <div>
                <select id="carType" name="carType">
                    <option value="">Select Type</option>
                    <option value="sedan">Sedan</option>
                    <option value="suv">SUV</option>
                    <option value="truck">Van</option>
                </select>
            </div>
            <div>
                <input class="carName" type="number" placeholder="Quantity" name="carQuantity"/>
            </div>
            <div>
                <input class="carName" type="text" placeholder="Brand" name="carBrand"/>
            </div>
            <div>
                <input class="carName" type="number" placeholder="Capacity" name="carCapacity"/>
            </div>
            <div>
                <input type="file" name="carImage" />
            </div>
            <div class="modalFooter">
                <button class="addBtn" type="submit" name="addcarsubmit">Add</button>
                <button id="addcarcancel" class="cancelBtn">Cancel</button>
            </div>
        </form>
        
    </div>
</div>