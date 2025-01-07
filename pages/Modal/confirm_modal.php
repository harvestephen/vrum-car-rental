<?php $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory ?>
<!-- Confirm Modal -->
<div id="confirmModal" class="modal">
        <div class="confirmModalBox">
            <div class="modalBody">
                <p>Do you want to proceed?</p>
            </div>
            <div class="modalFooter">
                <button class="confirmBtn" onclick="confirmAction()">Confirm</button>
                <button class="cancelBtn" onclick="closeModal()">Cancel</button>
            </div>
        </div>
    </div>
</div>