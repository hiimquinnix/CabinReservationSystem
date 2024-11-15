
<?php 

$pagename = "dashboard";
include "includes/header.php"; 
include "db.conn.php"; 


$total = mysqli_fetch_array(mysqli_query($conn, "select count(*) from users"))[0];
$total_booked = mysqli_fetch_array(mysqli_query($conn, "select count(*) from reservations where `status`='booked'"))[0];
$total_pending = mysqli_fetch_array(mysqli_query($conn, "select count(*) from reservations where `status`='pending'"))[0];
?>

<h4 class="text-uppercase">Dashboard</h4>


<div class="">

    <div class="d-flex gap-3 justify-content-center align-items-center p-3">
        <div class="bg-primary flex-grow-1 rounded shadow-sm">
            <h6 class="p-3 text-center text-white text-uppercase">Users | <?= $total ?> </h6>
        </div>
        <div class="bg-success flex-grow-1 rounded shadow-sm">
            <h6 class="p-3 text-center text-white text-uppercase">Booked | <?= $total_booked ?></h6>
        </div>
        <div class="bg-dark flex-grow-1 rounded shadow-sm">
            <h6 class="p-3 text-center text-white text-uppercase">Pending | <?= $total_pending ?></h6>
        </div>

    </div>
  
</div>
<?php include "includes/footer.php"; ?>