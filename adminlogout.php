<?php
session_start();

unset($_SESSION['feedback_adminid']);
header("Location: adminlogin.php");
die;


?>