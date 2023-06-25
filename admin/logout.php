<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
echo "hello this is logout";
header("Location:..\Login.php");
?>
