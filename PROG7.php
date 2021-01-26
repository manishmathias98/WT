<?
date_default_timezone_get('Asia/Kolkata');
?>
<head>
	<meta http-equiv="refresh" content="1"/>
	<title>DIGITAL CLOCK</title>
	<style>
		#clock{
			color:yellow;
			font-size:90px;
			position:absolute;
			top: 40%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		body {
			background-color:maroon;
		}
	</style>
	<p id="clock"> <?php echo date(" h: i : s A");?> </p>
</head>