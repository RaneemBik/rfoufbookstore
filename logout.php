<?php
session_start();
session_destroy(); //ends the session
header("location: home.php");
?>