<?php
include "Header.php";
if (isset($_SESSION['userName'])){
    session_unset(); // remove all session variables
    session_destroy();
    header('Location: index.php'); ;
}