<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){ // to check wheater user has already loged in or not.
    header("location: login.php"); // if user has already loged in then re-direct it to home page
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="navbarCSS.css">
    <title>CourseMap</title>

</head>

<body>
    <!-- Navbar -->
    <?php require "navbar.php"; ?>
    <!-- Navbar Ending -->

    <div class="container-fluid" id="img">
        <p>Things Are <span>Awesome</span> here at</p>
        <h1 id="h1">CourseMap</h1>
        <p>We <strong>Provide You Better Courses</strong> and <strong>Develop Awesome</strong> Stuff</p>
    </div>

    <!-- Membership  -->
    <!-- <div class="container-fluid membership-container">
        <div class="topBox membership">
            <h4>Membership</h4>
            <p>₹499/Month</p>
            <a href="#">Buy Now</a>
        </div>
        <div class="topBox pro-membership">
            <h4>Pro Membership</h4>
            <p>₹799/Month</p>
            <a href="#">Buy Now</a>
        </div>
    </div> -->

    <!-- Footer -->
    <?php require "footer.php" ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>