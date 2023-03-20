<?php
session_start();
include('server/connection.php');

if (!isset($_SESSION['logged_in'])) {
    header('location: login.php');
    exit;
}

if (isset($_GET['logout'])) {
    if (isset($_SESSION['logged_in'])) {
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_photo']);
        header('location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="d-inline-block align-text-top" src="/image/Turu.png" alt="" width="60" height="48">
            </a>
            <button class="navbar-toggler d-lg-none" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <form class="d-flex my-2 my-lg-0 ms-auto">
                    <a href="welcome.php?logout=1" id="logout-btn" class="btn btn-outline-danger my-2 my-sm-0">Logout</a>
                </form>
            </div>
      </div>
    </nav>
    
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <img src="image\child.png" alt="">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1>WELCOME</h1>
                <h1><?php echo $_SESSION['user_name']?></h1>
                <h1><?php echo $_SESSION['user_email']?></h1>
            </div>
        </div>
    </div>
    
</body>
<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase"></h5>

            <p>
            NRP : 162021032 <br>
            Nama : Davitra Eka Sanusi <br>
            Kelas : BB
            </p>
        </div>
    </div>
</footer>
</html>