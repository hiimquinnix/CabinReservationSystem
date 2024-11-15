<?php include "includes/header.php"; ?>
<div class="m-3">
    <a href="user_panel.php" class="btn btn-sm btn-dark ">Go Back</a>
</div>
<div class="row mt-5 p-3">
    <div class="col-md-5 col-sm-9 bg-light mx-auto p-0 overflow-hidden rounded shadow">
        <h6 class="p-3 bg-success text-white text-uppercase"> 
            Reservation Form
        </h6>
        <form id="reserveform" class="p-4">

            <div class="mb-4">
                <label for="" class="form-label">Mobile Number</label>
                <input type="tel" name="mobile" id="" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="" class="form-label">Expected Guests</label>
                <select name="pax" class="form-control" required>
                    <option value="19 - 24 pax">19 - 24 pax</option>
                    <option value="13 - 18 pax">13 - 18 pax</option>
                    <option value="7 - 12 pax">7 - 12 pax</option>
                    <option value="6 pax / Below">6 pax / Below</option>
                </select>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="" class="form-label">Check In</label>
                    <input type="date" name="checkin" class="form-control" required>
                </div>

                <div class="col">
                    <label for="" class="form-label">Check out</label>
                    <input type="date" name="checkout" class="form-control" required>
                </div>
            </div>
            <div class="tacbox">
            <input id="checkbox" type="checkbox" required>
            <label for="checkbox"> I agree to these <a href="terms&agreement.html" target="_blank">Terms and Conditions</a>.</label>
          </div>
            <div style="color: red">
            <p>A fifty percent (50%) downpayment is required to confirm your reservation. Payment should be made through GCash to Neil D. at 09155836325 within 6 hours. Please send a screenshot as proof of payment to Cabin in the Alley's Facebook page for confirmation.<br><br>
            Please note that exceeding the 6-hour window will be considered a decline of the reservation. </p>
          </div>

            <input type="hidden" name="reserve" value="1">
   
            
            <button type="submit" class="btn btn-dark w-100 my-4">Reserve Now</button>

           
    </div>
</div>


<?php include "includes/footer.php"; ?>


