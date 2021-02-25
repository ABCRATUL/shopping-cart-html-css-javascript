<?php
if(isset($_GET['logout'])) {
    session_start();
    session_destroy();
    unset($_SESSION["username"]);
   // unset($_SESSION["useremail"]);

    header('Location: frontpage.php');
    exit;
}?>