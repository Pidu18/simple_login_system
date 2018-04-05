<?php 
$conectare = mysqli_connect("localhost", "root", "", "login_system");


if (!$conectare) {
	echo 'EROOR: No connection with database';
}


