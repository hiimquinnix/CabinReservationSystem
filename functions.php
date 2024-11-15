<?php
session_start();
require "dbconn.php";

if (isset($_POST['register'])) {
    $name = mysqli_escape_string($conn, $_POST['name']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, $_POST['password']);
    $password2 = mysqli_escape_string($conn, $_POST['password2']);
    

    $query = "SELECT * from users where email='$email'";

    if (mysqli_num_rows(mysqli_query($conn, $query)) > 0) {
        echo 405;
    } else {
        if ($password == $password2) {
            $query = "insert into users (name, email, password, user_type) values ('$name', '$email', md5('$password'), 'user')";

            if (mysqli_query($conn, $query)) {
                echo 203;
            }
        }
        
    }
}

if (isset($_POST['reserve'])) {

    $client_id = $_SESSION['id'];
    $mobile = mysqli_escape_string($conn, $_POST['mobile']);
    $pax = mysqli_escape_string($conn, $_POST['pax']);
    $checkin = mysqli_escape_string($conn, $_POST['checkin']);
    $checkout = mysqli_escape_string($conn, $_POST['checkout']);
    $ref = strval(date('Y')) . strval(date('m')) . strval(date('d')) .  strval(date('Hs'));


    $query = "SELECT * from reservations where check_in = '$checkin' and `status` = 'booked'";

    if (mysqli_num_rows(mysqli_query($conn, $query)) > 0) {
        echo 405;
    } else {
        
        $query2 = "INSERT INTO reservations (client_id, mobile_no, check_in, check_out, `status`, pax, reference) values ('$client_id', '$mobile', '$checkin', '$checkout', 'pending', '$pax', '$ref')";

        if (mysqli_query($conn, $query2)) {
            echo 203;
        } else {
            echo 405;
        }
    }

    
}


if (isset($_POST['login'])) {
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, $_POST['password']);

    $query = "SELECT * from users where email='$email' and password=md5('$password')";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $results = mysqli_fetch_assoc($result);
        if ($results['user_type'] == "user") {
            $_SESSION['usertype'] = "user";
            echo 200;
        }
        else if ($results['user_type'] == "admin") {
            $_SESSION['usertype'] = "admin";
            echo 201;
        }


        $_SESSION['name'] = $results['name'];
        $_SESSION['id'] = $results['id'];
        $_SESSION['email'] = $results['email'];

    }
    else {
        echo 403;
    }

}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
}


?>