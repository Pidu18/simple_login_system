<?php
if (isset($_GET['logout'])) {
	include 'inc/codes/logout.php';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	<div class="header">
		<img src="logo.png">
	</div>
    <div class="container">
    	<a href="index.php?logout">Click here to Log Out</a>
    </div>
</body>
</html>