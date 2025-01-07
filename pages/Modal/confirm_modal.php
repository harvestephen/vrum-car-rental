<?php $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory ?>
<!-- Confirm Modal -->
<div id="confirmModal" class="modal">
    <div class="confirmModalBox">
        <div class="modalBody">
            <h2 class="confirmHeader">Do you wish to proceed?</h2>
        </div>
        <div class="modalFooter">
            <button class="confirmBtn" onclick="confirmAction()">Confirm</button>
            <button class="cancelBtn" onclick="closeModal()">Cancel</button>
        </div>
    </div>
</div>