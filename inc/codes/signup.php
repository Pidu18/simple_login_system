<?php
include '../../config/conectare.php';

$nume = htmlspecialchars($_POST['nume']);
$prenume = htmlspecialchars($_POST['prenume']);
$email = htmlspecialchars($_POST['email']);
$parola = htmlspecialchars($_POST['parola']);

$sql = "SELECT * FROM users WHERE email = '$email'";
$rez = mysqli_query($conectare, $sql);
$check = $rez->fetch_assoc();

if ($check >= 1) {
	header("Location: ../../index.php?o=used");
}else{
	$sql = "INSERT INTO users (nume, prenume, email, parola) VALUES ('$nume', '$prenume', '$email', '$parola')";
	$rez = mysqli_query($conectare, $sql);
	header("Location: ../../index.php?login");
}