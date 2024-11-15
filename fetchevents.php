<?php
include('dbconn.php');


$query = "SELECT check_in as `start`, check_out as `end`, `status` as title FROM reservations where `status` = 'booked' or `status` = 'complete' ";

    $result = mysqli_query($conn, $query);

    $eventsArr = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($eventsArr, $row);
        }
    }

    // Render event data in JSON format 
    echo json_encode($eventsArr);


?>