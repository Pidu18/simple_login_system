<?php
include '../../config/conectare.php';
session_start();

$email = $_POST['email'];
$parola = $_POST['parola'];
$sql = "SELECT * FROM users where email = '$email'";
$rez = mysqli_query($conectare, $sql);
$row = $rez->fetch_assoc();
$pw = $row['parola'];
$ver = password_verify($parola, $pw);
if ($ver == 0) {
	header("Location: ../../index.php?e=invalid");
} else {

	$sql = "SELECT * FROM users WHERE email='$email' AND parola='$pw'";
	$result = mysqli_query($conectare, $sql);

	if (!$row = $result->fetch_assoc()) {
		echo 'Parola sau usernameul nu se potriveste.';
	}else{
	$_SESSION['id'] = $row['id'];
	header("Location: ../../index.php");
    }
}
