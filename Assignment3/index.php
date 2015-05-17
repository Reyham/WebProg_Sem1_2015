<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Silverado</title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0"/>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script>
		document.createElement('main');
	</script>
</head>

<body>
	<?php include 'header.php';?>
	<nav>
		<div class="slider-wrapper">
			<div class="slider-box" style="background-image: url('images/slide-1.jpg');"></div>
			<div class="slider-box" style="background-image: url('images/slide-2.jpg');"></div>
			<div class="slider-box" style="background-image: url('images/slide-3.jpg');"></div>
		</div>
			<link type="text/css" rel="stylesheet" href="css/style.css" />
			<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
			<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
			<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
			<script type="text/javascript" src="js/infinite-slider-min.js"></script>
			<script type="text/javascript">
				$(function(){
					$(".slider-wrapper").infiniteSlider({
						animateType   : false,
						autoPlaySpeed : 2000,
						btnsText      : {
							next      : "",
							prev      : "",
							pause     : "",
							play      : ""
						},
						hoverPause    : true,
						navigation    : true,
						responsive    : false,
						speed         : "normal",
						swipe         : true,
						swipeLimit    : 50,
						width         : "800px"
					});
				});
		
		</script>
	</nav>
	<main>
			<div class="HomePanel">
				<h1>Grand reopening!</h1>
				<p>
					Silverado Cinemas is back and here to cater to not just to our previous loyal 
				</p>	 
				<p>
					customers but also those with a high standard of movie watching!
				</p>
				<p>
					We've upgraded our cinema! All new cinema seating, all new 3D projection 
				</p>
				<p>
					equipment and the latest Dolby light and sound effects!
				</p>
			</div>
			<div class="HomePanel">
				<h1>New Seats!</h1>
				<ul>
					<li>40 Normal seats (Full, Concession and Child under 12 pricing options)</li>
					<li>12 First Class seats (Full and Child pricing options)</li>
					<li>13 Bean Bag seats that can accommodate up to 3 children!</li>
				</ul>
			</div>
			<div class="HomePanel">
				<h1>Weekly Schedule</h1>
				<table style="font-size:90%; margin-left:auto; margin-right:auto; border: 1px solid black; border-collapse:collapse;" border="1px solid black">
					<tr>
						<td>Mon - Tue</td>
						<td>Wed - Fri</td>
						<td>Sat - Sun</td>
					</tr>
					<tr>
						<td>1pm - Childrens</td>
						<td>1pm - Romantic Comedy</td>
						<td>12pm - Childrens</td>
					</tr>
					<tr>
						<td>6pm - Art/Foreign</td>
						<td>6pm - Childrens</td>
						<td>3pm - Art/Foreign</td>
					</tr>
					<tr>
						<td>9pm - Romantic Comedy</td>
						<td>9pm - Action</td>
						<td>6pm - Romantic Comedy</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>9pm - Action</td>
					</tr>
				</table>
			</div>
			<div class="HomePanel">
				<h1>Price List</h1>
				<table style="font-size:90%; margin-left:auto; margin-right:auto; border: 1px solid black; border-collapse:collapse;" border="1px solid black">
					<tr>
						<td>Price List</td>
						<td>Mon - Tue(All Day)</td>
						<td>Wed - Fri(not 1pm)</td>
					</tr>
					<tr>
						<td></td>
						<td>Mon - Fri(1pm only)</td>
						<td>Sat - Sun(All Day)</td>
					</tr>
					<tr>
						<td>Standard-Full</td>
						<td>$12</td>
						<td>$18</td>
					</tr>
					<tr>
						<td>Standard-Conc</td>
						<td>$10</td>
						<td>$15</td>
					</tr>
					<tr>
						<td>Standard-Child</td>
						<td>$10</td>
						<td>$15</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>FirstClass-Adult</td>
						<td>$25</td>
						<td>$30</td>
					</tr>
					<tr>
						<td>FirstClass-Child</td>
						<td>$25</td>
						<td>$30</td>
					</tr>
					<tr>
						<td>BeanBag*</td>
						<td>$20</td>
						<td>$30</td>
					</tr>
					<tr>
						<td colspan="3">
							*Beanbags allow up to 2 adults OR 1 adult + 1 child OR up to 3 children!
						</td>
					</tr>
				</table>
			</div>
	</main>

	<?php include 'footer.php';?>
	
</body>
</html>
