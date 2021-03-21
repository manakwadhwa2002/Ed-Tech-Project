<?php
session_start();

// Connecting to Database

$conn = mysqli_connect("test-hackathon-db.cciii4x4yddb.ap-south-1.rds.amazonaws.com:3306", "admin", "mentordmentord", "demo_mtd_db");

if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
} else {
    //echo 'Connected';
}
