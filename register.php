<?php include "includes/header.php"; ?>

<div class="row mt-5 p-3">
    <div class="col-md-4 col-sm-8 bg-light mx-auto p-0 overflow-hidden rounded shadow-sm">
        <h6 class="p-3 bg-primary text-white text-uppercase"> 
            Registration Form
        </h6>
        <form id="regform" class="p-4">

            <div class="mb-4">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="" class="form-label">Confirm Password</label>
                <input type="password" name="password2" class="form-control" required>
            </div>
            
            <input type="hidden" name="register" value="1">

            <button type="submit" class="btn btn-dark w-100 mb-4">Login</button>

            <p class="small text-center">Already have an account?? <a href="login.php">Login here</a></p>
        </form>
    </div>
</div>


<?php include "includes/footer.php"; ?>


