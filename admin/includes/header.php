<?php
session_start();

error_reporting(E_ALL & ~E_NOTICE);

if(!isset($_SESSION['name']) || $_SESSION['usertype'] != "admin"){
    header('location: ../login.php');
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabin In the Alley</title>

    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/custom.css">
    <link rel="stylesheet" href="src/DataTables/datatables.css">


</head>

<body class="m-0 p-0">

    <div class="main m-0">
        <header class="p-4 bg-dark text-white">
            <h4 class="ms-4">Cabin in the Alley</h4>
        </header>

        <div class="p-3 row" style="min-height: 80%; box-sizing: border-box;">
            <div class="col-2">
                <div class="h-25">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item list-group-item-action <?= $pagename == "dashboard" ? "active" : null; ?>" aria-current="true">
                            Dashboard
                        </a>
                        <a href="accounts.php" class="list-group-item list-group-item-action <?= $pagename == "accounts" ? "active" : null; ?>">Accounts Management</a>
                        <a href="reservations.php" class="list-group-item list-group-item-action <?= $pagename == "reservations" ? "active" : null; ?>">Reservations</a>
                        <a href="#" id="logoutbtn" class="list-group-item list-group-item-action">Logout</a>

                    </div>
                </div>
            </div>
            <div class="col-10 p-2">