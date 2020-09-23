<?php
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    # code...
} else {
    header("location:../index.php");
}

?>