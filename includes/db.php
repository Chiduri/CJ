<?php

//db parameters
$serverName = "localhost";
$serverUser = "root";
$userPwd = "jonathan2010";
$dbName = "codejozi";

//db connection...
@$conn = mysqli_connect($serverName, $serverUser, $userPwd, $dbName);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";
