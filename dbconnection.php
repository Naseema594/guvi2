<?php

$user='root';
$pass='';
$db='regdb';

$con= new mysqli_connect("localhost", $user, $pass,$db);
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
?>