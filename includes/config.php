<?php 

include 'inc-conn/detail.php';

session_start();

$conn_1 = mysqli_connect($host, $user, $password,$userdb);
// Check connection
if (!$conn_1) {
 die("Connection failed: " . mysqli_connect_error());
}

$conn_2 = mysqli_connect($host, $user, $password,$opendb);
// Check connection
if (!$conn_2) {
 die("Connection failed: " . mysqli_connect_error());
}

$conn_3 = mysqli_connect($host, $user, $password,$tpartydb);
// Check connection
if (!$conn_3) {
 die("Connection failed: " . mysqli_connect_error());
}