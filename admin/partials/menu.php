<?php

include('../config/constants.php');
include('login-check.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' href='<?= SITEURL; ?>assets/images/poinsla-icon.JPG' type='image/x-icon' />
    <title>Admin | Dashboard</title>

    <link rel="stylesheet" href="../assets/css/main-front.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <!-- Menu Section Starts -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="<?= SITEURL; ?>index.php">Poinsla</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-skills.php">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-category.php">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-food.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Menu Section Ends -->