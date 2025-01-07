<?php $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory ?>
<!-- Terms Modal -->
<div id="termsModal" class="modal">
        <div class="termsModalBox">
            <div>
                <h2 class="termsModalHeader">Terms and Condition</h2>
            </div>
            <div class="modalBody">
                <ol>
                    <li><b>Rental Agreement:</b> By renting a vehicle, you agree to abide by all terms and conditions outlined here.</li>
                    <li><b>Driver Requirements:</b> Renters must be at least 21 years old and hold a valid driver's license. Additional age restrictions may apply for specific vehicles.</li>
                    <li><b>Payment and Deposit:</b> Full payment and a security deposit are required before rental.</li>
                </ol>
            </div>
            <div class="modalFooter">
                <button class="agreeBtn" onclick="agreeTerms()">Agree</button>
                <button class="cancelBtn" onclick="closeModal()">Cancel</button>
            </div>
        </div>
    </div>
</div>