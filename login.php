<?php include "includes/header.php"; ?>

<div class="row mt-5 p-3">
    <div class="col-md-4 col-sm-8 bg-light mx-auto p-0 overflow-hidden rounded shadow-sm">
        <h6 class="p-3 bg-primary text-white text-uppercase"> 
            Login Form
        </h6>
        <form id="loginform" class="p-4">

            <div class="mb-4">
                <label for="" class="form-label">Email Address</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="mb-4">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>

            <input type="hidden" name="login" value="1">
            
            <button type="submit" class="btn btn-dark w-100 mb-4">Login</button>

            <p class="small text-center">Don't have account yet? <a href="register.php">Register here</a></p>
        </form>
    </div>
</div>


<?php include "includes/footer.php"; ?>


