<?php
require_once 'connect.php';
session_start();
unset($_SESSION["id"]);
unset($_SESSION["uname"]);
header("Location:front.php");
session_end();
?>