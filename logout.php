<?php
// require 'nav.php';
session_start();

session_destroy();
require 'index.php';
// echo"you have been logged out <a href='login.php'>log in</a>";
?>