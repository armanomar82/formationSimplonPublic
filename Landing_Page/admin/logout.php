<?php
session_start();
session_destroy();
unset($_SESSION['type']);

if (!empty($_SESSION)) $_SESSION = [];
if (isset($_COOKIE[session_name()])) setcookie(session_name(), "", time()-1, "/");

header('location: admin.php');
?>