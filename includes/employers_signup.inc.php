<?php
include 'db.php';

$nameSurname = mysqli_real_escape_string($conn, $_POST['name_and_surname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$position = mysqli_real_escape_string($conn, $_POST['position']);
$companyName = mysqli_real_escape_string($conn, $_POST['company_name']);
$password = mysqli_real_escape_string($conn, $_POST['pwd']);

$sqli = "INSERT INTO users_employers(name_and_surname, email, position, company_name, pwd) VALUES('$nameSurname', '$email', '$position', '$companyName', '$password' );";
mysqli_query($conn, $sqli);

//redirect to....
header('Location: ../index.php');
