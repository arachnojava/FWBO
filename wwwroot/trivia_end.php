﻿<!doctype html>
<?php session_start(); 
$score = $_GET["score"];
?>

<html>

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118827552-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118827552-1');
</script>

<script language="javascript"> function score(){ document.getElementById("score").innerHTML = "SCORE:  <?php echo $score; ?>";} </script>
<script>
 	
var sec = 60000;
	setTimeout( function () {
	window.location.href = "index.html";}, sec );
</script>
<link href="css/fwb2018.css" rel="stylesheet" type="text/css">

<meta charset="utf-8">
<title>Thanks for playing!</title>
</head>

<body style="background-color:#24b3ce;" ><div style="background-color:#24b3ce;">  <div style="text-align: center;	padding: 30px 0px; #ffffff;"><img src="images/butch-sideviewairplane.png" width="700" height="394" alt=""/>
  <h2 style="font-family: 'Roboto Condensed', sans-serif; 	font-size: 180%; 	font-weight: 700;	color: #ffffff;	text-transform: uppercase;
	text-align: center;">GREAT JOB!    THANKS FOR PLAYING  AIRPORT TRIVIA.</h2>
  <h2 id = "score" style="font-family: 'Roboto Condensed', sans-serif; 	font-size: 160%; 	font-weight: 700;	color: #ffffff;	text-transform: uppercase;
	text-align: center;">SCORE : </p></h2>
	<script> score(); </script>
 
	
	<!-- this is section to hide when not promoting discounts-->
	<div id="couponsection">
	<div style="background-color:#ef4323; padding:20px;">
  <h2 style="font-family: 'Roboto Condensed', sans-serif; 	font-size: 120%; 	font-weight: 700;	color: #ffffff;	text-transform: uppercase;
	text-align: center;">    TAKE ADVANTAGE OF  DISCOUNTS FROM THE SHOPS OF O’HARE.<br>
    PLEASE TAKE A COUPON JUST ABOVE THE GAME SCREEN AND PRESENT IT TO CASHIER AT PARTICIPATING STORE. </h2><div style="width:80%; margin:0 auto;">
  <p style="font-family: 'Roboto Condensed', sans-serif; 	font-size: 95%; 	font-weight: 400;	color: #ffffff;	text-transform: none;
	text-align: center;">Offers valid from November 12, 2018 – January 7, 2019. Cannot be combined with other offers. Excludes alcohol,
tobacco products, newspapers and magazines. Cannot be used as gratuity. Offers may change without notice.
Exclusions and rules may apply. See an associate for details. Valid only at O’Hare International Airport locations.
</p></div></div>
	</div> <!-- this is end of section -->
  <p style="font-family: 'Roboto Condensed', sans-serif; 	font-size: 120%; 	font-weight: 700;	color: #ffffff;	text-transform: uppercase;
	text-align: center;"><a href="Game_Trivia.php"><img src="images/game_flying_play-again_btn.png"></a> <br><br>

<a href="index.html" style="color:#ffffff; text-decoration:none;">Back to Game Home </a> 
<br />
</div>
</body>
</html>