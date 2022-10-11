<?php
$login = false;
$error = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];

    // Database Connection
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "coursemap";
    
    $connect = mysqli_connect($server, $username, $password, $database); // connect to database.
    if(!$connect){
            die("Unable To Connect ".mysqli_error($connect));
    }
    
    $query = "SELECT * FROM Registered WHERE email = '$email'";
    $result = mysqli_query($connect, $query); // execute query.
    $rows = mysqli_num_rows($result);
    
    if($rows == 1){ // if email-id already exists
        while($record = mysqli_fetch_assoc($result)){
            if(password_verify($userpassword, $record['Password'])){ // if password hash doesn't match
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("location: index.php");
                exit;
            }
            else{
                $error = "Invalid Credentials"; // if hash password doesn't match.
            }
        }
    }
    else{
        $error = "Invalid Credentials"; // if email-id is not there.
    }
}
else{ // if connection failed.
    $error = "Invalid Credentials";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varta:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="navbarCSS.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <?php require "navbar.php"; ?>
    <!-- Navbar Ending -->

    <!-- alert -->
    <?php
    if(!$login || $error){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong>'.$error.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <!-- Alert End -->

    <!-- login Form -->
    <div class="container-fluid login">
        <div class="container-sm">
            <form action="login.php" class="form" method="post">
                <div class="header">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                        class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                        </path>
                    </svg>
                    <h2>Login</h2>
                </div>
                <div class="input-group">
                    <input type="text" name="useremail" id="useremail" required>
                    <label for="useremail">Email Address</label>
                </div>
                <div class="input-group">
                    <input type="password" name="userpassword" id="userpassword" required>
                    <label for="userpassword">Password</label>
                    <p>
                        <a href="register.php" class="link-warning text-decoration-none">Create Account</a><br>
                        <a href="#">Forgot Password?</a>
                    </p>
                </div>
                <div class="btns row">
                    <input type="submit" value="Login" class="btn-primary col-sm-4">
                    <a class="btn-danger col-sm-4" href="index.php">Back</a>
                </div>
            </form>
        </div>
    </div>
    <!-- login Form End -->

        <!-- Footer -->
        <?php require "footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>