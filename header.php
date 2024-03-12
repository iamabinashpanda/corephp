<?php include_once "connection.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="container">
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/images/logo.png" class="img img-thumbnail" alt="" width="50px"> <b> ECom</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            $sql = "SELECT name FROM `category`";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                            ?>
                            <li><a class="dropdown-item" href="#"><?=$row['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <?php
                    session_start();
                    if (isset($_SESSION['USER_ID'])) {
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome "Guest"
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Update Profile</a></li>
                                <li><a class="dropdown-item" href="#">Update Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Log Out</a></li>
                            </ul>
                        </li>
                    <?php
                    } else {

                    ?>
                        <li class="nav-item">
                            <a class="nav-link text-primary btn btn-light me-1" href="login.php">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark btn btn-warning" href="register.php">Register</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>