<?php
include 'config/conectare.php';
session_start();


if (!isset($_SESSION['id'])) {
	include 'inc/index.php';
}
if (isset($_SESSION['id'])) {
	include 'inc/home.php';
}