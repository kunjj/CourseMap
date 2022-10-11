<?php
$cookieName = "course";
$cookieValue = "Java";
setcookie($cookieName,$cookieValue, time() + (86400 * 5), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookieName])){
        echo "Cookie named: ".$cookieName." is not set<br>";
    }
    else{
        echo "Cookie named: ".$cookieName." is set<br>";
        echo "Cookie value: ".$cookieValue." <br>";
    }
    ?>
</body>
</html>