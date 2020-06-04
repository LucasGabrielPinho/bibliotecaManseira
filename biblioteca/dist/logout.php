<?php
    session_start();
    $_SESSION['usuLogin'] = "";
    header("Location: login.php");
?>