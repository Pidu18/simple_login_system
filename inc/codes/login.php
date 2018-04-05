<?php
include '../../config/conectare.php';
session_start();


$email = htmlspecialchars($_POST['email']);
$parola = htmlspecialchars($_POST['parola']);
$sql = "SELECT * FROM users WHERE email = '$email' AND parola = '$parola'";
$rez = mysqli_query($conectare, $sql);
$row = $rez->fetch_assoc();
if ($row > 1) {
	$_SESSION['id'] = $row['id'];
	header("Location: ../../index.php");
}else{
    header("Location: ../../index.php?o=failed");
}