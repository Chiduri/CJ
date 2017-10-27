<?php
include_once 'db.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$province = mysqli_real_escape_string($conn, $_POST['province']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "INSERT INTO users_employees (first_name, last_name, user_province, user_email, user_pwd) VALUES ('$first', '$last', '$province', '$email', '$pwd');";
mysqli_query($conn, $sql);
header('Location: ../dashboard.php?signup=success');

 ?>
