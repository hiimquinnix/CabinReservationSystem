<?php

$pagename = "accounts";
include "includes/header.php";
include "functions/functions.php";

?>

<h4 class="text-uppercase">Accounts Management</h4>



<div class="p-3">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
               
            </tr>
            
        </thead>

        <tbody>
        <?php 
                                $users = getAll("users");
                                

                                if(mysqli_num_rows($users) > 0)
                                {
                                    foreach($users as $item)
                                    {
                                        ?>
                                            <tr>
                                                <td><?= $item['id']; ?></td>
                                                <td><?= $item['name']?></td>
                                                <td><?= $item['email']; ?></td>
                                       
                                                <td>
                                                    <?= $item['user_type']?>
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