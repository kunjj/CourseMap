<?php
$error = true;
$showError = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // Database Connection
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "coursemap";

    $connect = mysqli_connect($server, $username, $password, $database);
    if(!$connect){
        die("Unable To Connect ".mysqli_error($connect));
    }
    // Database Connection Done

    // Fecth The Data From Form.
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];
    $userConfirmPassword = $_POST['userConfirmPassword'];

    // Chech Wheather Email-Id Already Exist Or Not.
    $sqlQuery = "SELECT * FROM Registered WHERE email = '$email'";
    $result = mysqli_query($connect, $sqlQuery);
    $numOfRows = mysqli_num_rows($result);

    if($numOfRows > 0) // it means that email-id already exist.
    {
        $showError = "Email-Id Already Exist.";
    }
    else{ // And If email doen't exist then check wheather password & confirm password matches or not.
        if($userpassword == $userConfirmPassword){
            $error = false;
            $hash = password_hash($userpassword, PASSWORD_DEFAULT); // hashing password.
            $query = "INSERT INTO Registered VALUES ('$name','$email','$hash')";
            mysqli_query($connect, $query);
        }
        else{
            $showError = "Password Does Not Match.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varta:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="navbarCSS.css">
</head>

<body>
    <!-- Navbar -->
    <?php require "navbar.php"; ?>
    <!-- Navbar Ending -->
    
    <!-- alert -->
    <?php
    if(!$error){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You Have Successfully Created Your Account.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        // header("location: index.php");
    }
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error! </strong>'. $showError. '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <!-- Alert End -->

    <!-- Sign Up Form -->
    <div class="container-fluid register">
        <div class="container-sm">
            <form action="register.php" class="form" method="post">
                <div class="header">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="user"
                        class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                        </path>
                    </svg>
                    <h2>Register</h2>
                </div>
                <div class="input-group">
                    <input type="text" name="username" id="username" required>
                    <label for="username">Full Name</label>
                </div>
                <div class="input-group">
                    <input type="text" name="useremail" id="useremail" required>
                    <label for="useremail">Email Address</label>
                </div>
                <div class="input-group">
                    <input type="password" name="userpassword" id="userpassword" required>
                    <label for="userpassword">Password</label>
                </div>
                <div class="input-group">
                    <input type="password" name="userConfirmPassword" id="userConfirmPassword" required>
                    <label for="userConfirmPassword">Confirm Password</label>
                </div>
                <div class="btns row">
                    <input type="submit" value="Register" class="btn-primary col-sm-3" onclick="validate()">
                    <input type="reset" value="Reset" class="btn-warning col-sm-3">
                    <a class="btn-danger col-sm-3" href="index.php">Back</a>
                </div>
            </form>
        </div>
    </div>

    <?php require "footer.php" ?>
    <!-- Sign Up Form End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>