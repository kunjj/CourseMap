<?php
// Saving Data
session_start();
$_SESSION['name'] = "Jain Kunjan";
$_SESSION['age'] = 20;
echo "Your Session Has Started!";

// fetching data
session_start();
echo "Welcome ".$_SESSION['name']. " Your Age Is ".$_SESSION['age'];

// logout
session_unset();
session_destroy();
echo "You Have Been Logout!";
?>