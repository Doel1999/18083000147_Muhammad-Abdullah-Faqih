<?php 

include 'koneksi.php';

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}

if ($_SESSION['status']=="user") {
    header("Location: formuser.php");
} else if ($_SESSION['status']=="admin"){
    header("Location: dashboard.php");
}
?>

