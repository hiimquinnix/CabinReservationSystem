
<?php 

$pagename = "reservations";
include "includes/header.php"; 
include "functions/functions.php";


?>

<h4 class="text-uppercase">Reservations Management</h4>
<div class="p-3">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Expected Guests</th>
                <th>Check-IN</th>
                <th>Check-Out</th>
                <th>Reference</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            
        </thead>

        <tbody>
        <?php 
                                $reservations = getAllRelated("reservations", "users");
                                

                                if(mysqli_num_rows($reservations) > 0)
                                {
                                    foreach($reservations as $item)
                                    {
                                        ?>
                                            <tr>
                                                <td><?= $item['rid']; ?></td>
                                                <td><?= $item['name']?></td>
                                                <td><?= $item['email']; ?></td>
                                                <td><?= $item['mobile_no']; ?></td>
                                                <td><?= $item['pax']; ?></td>
                                                <td><?= $item['check_in']; ?></td>
                                                <td><?= $item['check_out']; ?></td>
                                                <td><?= $item['reference']; ?></td>
                                                <td><?= $item['status']; ?></td>
                                       
                                                
                                                <td>
                                                <?php
                                                if ($item['status'] == 'pending') {
                                                    echo "<div class='row gap-2'><a href='edit-product.php?id=<?= $item[rid] ?>' class='reservebtn btn btn-sm btn-primary col-12' data-id='$item[rid]' data-email='$item[email]'>Reserve Now</a>
                                                    <a href='edit-product.php?id=<?= $item[rid] ?>' class='cancelbtn btn btn-sm btn-danger col-12' data-id='$item[rid]' data-email='$item[email]'>Decline</a></div>";
                                                    
                                                }

                                                ?>
                                                
                                                    
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                            ?>
        </tbody>
    </table>
</div>


<?php include "includes/footer.php"; ?>