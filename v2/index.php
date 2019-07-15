<!DOCTYPE html>
<html>
<head>
	<title>Fresh &raquo; Version 1.5</title>
	<link rel="stylesheet" type="text/css" href="assets/main/app.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/ext/font-awesome/css/all.css?<?php echo time(); ?>">
	<script src="assets/ext/jquery/jquery.js?<?php echo time(); ?>"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<meta charset="utf-8">
<meta name="author" content="FreshRadio.pw">
<meta name="description" content="Fresh is an ad-free, non-profit international radio station, playing the hottest tunes 24/7!">
<meta property="og:site_name" content="Fresh">
<meta property="og:title" content="Fresh">
<meta property="og:type" content="website">
<meta property="og:url" content="http://freshradio.pw/">
<meta property="og:image" content="http://freshradio.pw/assets/images/fresh-logo.png">
<meta property="og:description" content="Fresh is an ad-free, non-profit international radio station, playing the hottest tunes 24/7!">
</head> 
<body>
<?php  ?>
                <p style="position:absolute; font-size: 10px; right: 1%; bottom: 2%; font-family: 'Encode Sans Semi Expanded';"> V2 &bull; Coded by Jack and Kyle.</p>

      
	<audio id="player" autoplay="false"><source src="http://159.65.235.94:8010/radio.mp3?1562600672" type="audio/mpeg"></audio>
	<div class="web">
		<div class="sep"></div>
	
			<h3 class="logo">Fresh</h3>
			<center><div class="navbar">
				<a href="#Fresh.Home"><div class="nav-link selected home">
					Home
				</div></a>
				<a href="#Fresh.Request"><div class="nav-link request">
					request
				</div></a>
				<a href="#Fresh.Timetable"><div class="nav-link timetable">
					timetable
				</div></a>
				<a href="#Fresh.Applications"><div class="nav-link application">
					Applications
				</div></a>
				<a href="#Fresh.Partners"><div class="nav-link partner">
					Partners
				</div></a>
				<a href="#Fresh.v2Hub" style="font-weight: bold;"><div class="nav-link v2Hub" style="font-weight: bold;">
					 Shop
				</div></a>
				
				<div class="socials">
					<div class="nav-link discord social">
						<a href="https://discord.gg/9sD7v7x" target="_blank"><i class="fab fa-discord"></i></a>
					</div>
					<div class="nav-link twitter social">
						<a href="https://twitter.com/freshradiopw" target="_blank"><i class="fab fa-twitter"></i></a>
					</div>
					<div class="nav-link instagram social">
						<a href="https://instagram.com/freshradioofficial" target="_blank"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
			<div class="web-content">
				<i class="fa fa-circle-notch fa-spin circlen"></i>
			</div>
		</center>
	</div>

             

	

<script type="text/javascript" src="assets/main/Fresh.js?<?php echo time(); ?>"></script>
<script type="text/javascript">
	function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('time').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};
  return i;
}
</script>
<body onload="startTime()">



</body>
</html>			