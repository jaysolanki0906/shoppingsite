<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
echo "hello this is logout";
header("Location:C:\wamp64\www\php_prgms\project\Login.php");
?>