<?php
session_start();

session_unset();
header('location:http://localhost/project/login.php?');
?>