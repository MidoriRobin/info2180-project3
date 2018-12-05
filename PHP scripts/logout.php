<?php
// core configuration
require "/PHP scripts/login.php";
 
// destroy session, it will remove ALL session settings
session_destroy();
  
//redirect to login page
header("Location: ../HTML/index.php ");


?>