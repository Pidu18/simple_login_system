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
    <?php
    if (!isset($_GET["signup"])) {
    	include 'inc/login.php';
    }else{
    include 'inc/signup.php';
    }
    ?>
</body>
</html>