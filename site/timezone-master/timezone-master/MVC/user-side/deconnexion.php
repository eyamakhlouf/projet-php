<?php
session_start();
$_SESSION=Array();
session_destroy();
unset($_SESSION);
header('Location:index.php');
?>