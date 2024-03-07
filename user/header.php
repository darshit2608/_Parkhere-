<?php
session_start();
include "../db.php";
if(!isset($_SESSION["user"]))
{
    $_SESSION['msg']='You are not valid user, Please Login to Continue';
    header("location:../userlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Parking Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Parking Management System</h1>
    </header>
    <nav>
        <a href="user-home.php">Home</a>
        <a href="parking-cost.php">Parking Cost</a>
        <a href="book-parking-slot.php">Book Parking Slot</a>
        <a href="your-bookings.php">Your Bookings</a>
        <a href="../index.php">Logout</a>
    </nav>
    <div id="hamburger-icon">&#9776;</div>
    <div id="mobile-nav">
        <a href="user-home.php">Home</a>
        <a href="parking-cost.php">Parking Cost</a>
        <a href="book-parking-slot.php">Book Parking Slot</a>
        <a href="your-bookings.php">Your Bookings</a>
        <a href="../index.php">Logout</a>
    </div>