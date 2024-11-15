<?php
session_start();

include('db.conn.php');

function getAll($table)
{
    global $conn;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($conn, $query);
    
}

function getAllRelated($table1, $table2)
{
    global $conn;
    $query = "SELECT *, $table1.id as rid FROM $table1 INNER JOIN $table2 ON $table1.client_id = $table2.id ORDER BY $table1.id DESC";
    return $query_run = mysqli_query($conn, $query);
    
}


if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
}

if (isset($_POST['reserve'])) {
    include "../inquiry.php";

    $id = $_POST['id'];

    $query = "UPDATE reservations set `status` = 'booked' where id = $id";

    if (mysqli_query($conn, $query)) {
        echo 200;
    } else {
        echo 403;
    }

    $recipient = $_POST['email'];

    $subject = "Cabin in the Alley : RESERVATION UPDATE";
    $message = "Good day dear customer, we are happy to tell you that your recent reservation has been booked. Thank you and have a great day ahead!";


    sendInquiry($mail, $recipient, $subject, $message );
}


if (isset($_POST['cancel'])) {
    include "../inquiry.php";

    $id = $_POST['id'];

    $query = "UPDATE reservations set `status` = 'declined' where id = $id";

    if (mysqli_query($conn, $query)) {
        echo 200;
    } else {
        echo 403;
    }

    $recipient = $_POST['email'];

    $subject = "Cabin in the Alley : RESERVATION UPDATE";
    $message = "Good day dear customer, we are sad to tell you that your recent reservation has been declined. We apologize for the inconvinience.";


    sendInquiry($mail, $recipient, $subject, $message );
}


?>