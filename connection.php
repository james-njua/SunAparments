<?php 
//1.create a db connection
$server="localhost";
$dbuser="james";
$dbpass="229123003";
$dbname="final";
$conn=mysqli_connect($server,$dbuser,$dbpass,$dbname);
//check for connection error

// if(!$conn){
// 	die("connection error:".mysqli_connect_error());
//  }
//  echo "<b>connection success</b>";
?>