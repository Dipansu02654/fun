<?php
session_start();
$choice = $_GET["choice"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		home
	</title>
</head>
<body>
<h1>welcome<?php echo $_COOKIE["user"];?></h1>
<h4>your choice is <?php if(empty($choice)){echo "apple";}else{echo $choice}?></h4>
</body>
</html>