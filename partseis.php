<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> Dev Site</title>
	<meta name="Pokemon Php" content="Javascript">
	<meta name="Ryan C" content="RZwebsolutions">
	<link rel="stylesheet" type="text/css" href="css/960_12_col.css">
	</head><style>
body {
background-image: url(images/8bitbg.png); /*You will specify your image path here.*/
-moz-background-size: cover;
-webkit-background-size: cover;
background-size: cover;
background-position: top center !important;
background-repeat: no-repeat !important;
background-attachment: fixed;
}
</style>
<body>
	<div id="oakIntroPic" class="">	
	<img id="oakPic" src="images/oak.png"/>	
	</div>
		<div id="oakIntro">
			<p>Er, was it <?php 
			$playerName = $_POST["rivalName"];
			echo "<b><p>$rivalName</p></b>."; 
			$_SESSION['playerName'] = $rivalName;
			?>
			?</p>
			<p> That's right! I remember now! His name is <?php echo $playername; ?></p>
			<p><a href="partseite.php"> <p>»</p></a></p>
		</div>
</body>
</html>
