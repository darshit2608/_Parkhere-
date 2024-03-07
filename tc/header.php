<?php
session_start();
include "../db.php";

// check valid user or not
if(!isset($_SESSION["tc"])) {
    $_SESSION['msg']='Your not valid user, Please login to continue..';
    header("location:../tclogin.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Checker - Parking Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Parking Management System</h1>
    </header>
    <nav>
        <a href="tc-home.php">Home</a>
        <a href="check-parking-ticket.php">Check Parking Ticket</a>
        <a href="parking-logs.php">Parking Logs</a>
        <a href="../logout.php">Logout</a>
    </nav>
    <div id="hamburger-icon">&#9776;</div>
    <div id="mobile-nav">
        <a href="tc-home.php">Home</a>
        <a href="check-parking-ticket.php">Check Parking Ticket</a>
        <a href="parking-logs.php">Parking Logs</a>
        <a href="../logout.php">Logout</a>
    </div>