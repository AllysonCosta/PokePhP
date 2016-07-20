<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> Dev Site</title>
	<meta name="Pokemon Php" content="Javascript">
	<meta name="Ryan C" content="RZwebsolutions">
	<link rel="stylesheet" type="text/css" href="css/960_12_col.css">
	</head>




<style>
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



<?php 
$playerGender = $_POST["playerGender"];
$_SESSION['playerGender'] = $playerGender;
?>
	<div id="oakIntroPic" class="">
		
	<img id="rival" src="images/gary.png"/>	

	</div>
			
	
	
	<div id="oakIntro">
			<p> This is my grandson</p>
			<p> He's been your rival since you were a baby...</p>
			<p>..Erm, what is his name again?</p>
			</br>
			<form action="partseis.php" method="post">	
			<input type="text" name="rivalName">
			<input type="submit" value="Submit">
			</form> 
			</div>
			
			
			























</body>
</html>
