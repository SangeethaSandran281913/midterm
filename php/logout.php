<?php

    session_start();

    unset($_SESSION["sessionid"]);
    unset($_SESSION["email"]);
    header("Location:../index.php");

?>