<?php

// User Login

$name = $_POST['uname'];
$password = $_POST['psw'];

// Default username and password

$username = '1BY17CS059';
$pwd = 'admin';


if  ($name == '1by17cs059' && $password=='bmsit')
  {

    header("Location: ./slotsAvailability.php");
    exit();
  }
else {
  header("Location: ./error.php");

}
?>
