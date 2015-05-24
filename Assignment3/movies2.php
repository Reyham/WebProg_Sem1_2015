<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Silverado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="functions2.js"></script>
</head>

<body>
	<?php include 'header.php';?>
	<div class="PosterContainer">
		<img id="Poster1" src="cinderella.jpg" alt="Cinderella">
		<img id="Poster2" src="fnf7.jpg" alt="Fast and Furious 7">
		<img id="Poster3" src="home.jpg" alt="Home the movie">
		<img id="Poster4" src="soundofmusic.jpg" alt="Sound of Music">
	</div>
	
	<div class="SynopsisContainer">
		<div id="Synopsis">
			<h1 id="Title">Title</h1>
			<div class="MovieDetails">
				<h2>Consumer Advice</h2><p class="Details">Very mild themes</p><br>
				<h2>Director</h2><p class="Details">Kenneth Branagh</p><br>
				<h2>Main Cast</h2><p class="Details">Lily James,  Richard Madden,  Cate Blanchett,  Helena Bonham Carter</p><br>
				<h2>Genre</h2><p class="Details">Comedy, Fantasy, Romance</p><br>
				<h2>Running Time</h2><p class="Details"> 104 Minutes</p><br>
				<h2>Release Date</h2><p class="Details">26 March 2015</p><br>
			</div>
			<div class="MovieDetails2">
				<h2>Synopsis</h2><p class="Details" id="Description">The story of "Cinderella" follows the fortunes of young Ella (Lily James) whose merchant father remarries following the death of her mother. 
				Eager to support her loving father, Ella welcomes her new stepmother (Cate Blanchett) and her daughters Anastasia (Holliday Grainger) and Drisella (Sophie McShera) into the family home. 
				But, when Ella's father unexpectedly passes away, she finds herself at the mercy of a jealous and cruel new family. 
				A live-action feature inspired by the classic fairy tale, "Cinderella" brings to life the timeless images from Disney's 1950 animated 
				masterpiece as fully-realized characters in a visually-dazzling spectacle for a whole new generation.</p><br>
				<div class="SynopsisLinks">
					<a href="#openModal"  class="Ticketing" id="RC" title="Cinderella">Buy tickets</a>
				</div>	
			</div>	
		</div>
	</div>
	
	<div id="openModal" class="modalDialog">
		<div>
			<a title="Close" class="close">X</a>
			<form class="BookingForm" method="post" action="movies2.php" onsubmit="submitButton()">
				<div class="TriggerLabel">Film Name:</div> <div id="FilmName" style="display:inline-block">Name</div><br><br>
				<input  id="genre" type="hidden" name="film" value="RC">
				<div class="TriggerLabel">Session Day:</div> <select class="SessionDay" name="day" required>
							<option value="">Select</option>
							<option value="Monday">Monday</option>
							<option value="Tuesday">Tuesday</option>
							<option value="Wednesday">Wednesday</option>
							<option value="Thursday">Thursday</option>
							<option value="Friday">Friday</option>
							<option value="Saturday">Saturday</option>
							<option value="Sunday">Sunday</option>
							</select><br><br>
				<div class="TriggerLabel">Session Time:</div> <div id="TimeDisplay">N/A</div>
				<input class="SessionTime" type="hidden" name="time" value=""><br><br>
				<div class="Label Column">Ticket Type</div>
				<div class="DropBox Column">Quantity</div>
				<div class="SubCostHead Column">Price($)</div><br><br>
				<div class="Label">Adult</div> <select class="DropBox" id="SA" name="SA">
					<option value="0">0</option>
					</select>
					<input type="hidden" id="SAquantity" name="SAquantity" value="0">
				<div class="SubCost" id="SAsub" name="SAsub">0</div><br><br>
				<div class="Label">Concession</div> <select class="DropBox" id="SP" name="SP">
					<option value="0">0</option>
					</select>
					<input type="hidden" id="SPquantity" name="SPquantity" value="0">
				<div class="SubCost" id="SPsub" name="SPsub">0</div><br><br>
				<div class="Label">Child</div> <select class="DropBox" id="SC" name="SC">
					<option value="0">0</option>
					</select>
					<input type="hidden" id="SCquantity" name="SCquantity" value="0">
				<div class="SubCost" id="SCsub" name="SCsub">0</div><br><br>
				<div class="Label">First Class Adult</div> <select class="DropBox" id="FA" name="FA">
					<option value="0">0</option>
					</select>
					<input type="hidden" id="FAquantity" name="FAquantity" value="0">
				<div class="SubCost" id="FAsub" name="FAsub">0</div><br><br>
				<div class="Label">First Class Child</div> <select class="DropBox" id="FC" name="FC">
					<option value="0">0</option>
					</select>
					<input type="hidden" id="FCquantity" name="FCquantity" value="0">
				<div class="SubCost" id="FCsub" name="FCsub">0</div><br><br>
				<div class="Label">Beanbag - 1 Person</div> <select class="DropBox" id="B1" name="B1">
					<option value="0">0</option>
					</select>
					<input type="hidden" id="B1quantity" name="B1quantity" value="0">
				<div class="SubCost" id="B1sub" name="B1sub">0</div><br><br>
				<div class="Label">Beanbag - 2 People</div> <select class="DropBox" id="B2" name="B2">
					<option value="0">0</option>
					</select>
					<input type="hidden" id="B2quantity" name="B2quantity" value="0">
				<div class="SubCost" id="B2sub" name="B2sub">0</div><br><br>
				<div class="Label">Beanbag - 3 Children</div> <select class="DropBox" id="B3" name="B3">
					<option value="0">0</option>
					</select>
					<input type="hidden" id="B3quantity" name="B3quantity" value="0">
				<div class="SubCost" id="B3sub" name="B3sub">0</div><br><br>
				<div class="Label">Total Price:</div> <div id="TotalPrice" name="price">$0.00</div><br><br>
				<input id="price" type="hidden" name="price"value="">
				<input style="float:right"id="SubmitButton"type="Submit" value="Submitted" name="Submit">
			</form>
			
		</div>
		</div>
		<div>
	<?php
				if (isset($_POST['Submit'])){
					$seats = array(
					"SA"=>array("quantity"=>$_POST['SAquantity'],"price"=>$_POST['SA']),	
					"SP"=>array("quantity"=>$_POST['SPquantity'],"price"=>$_POST['SP']),
					"SC"=>array("quantity"=>$_POST['SCquantity'],"price"=>$_POST['SC']),	
					"FA"=>array("quantity"=>$_POST['FAquantity'],"price"=>$_POST['FA']),		
					"FC"=>array("quantity"=>$_POST['FCquantity'],"price"=>$_POST['FC']),	
					"B1"=>array("quantity"=>$_POST['B1quantity'],"price"=>$_POST['B1']),					
					"B2"=>array("quantity"=>$_POST['B2quantity'],"price"=>$_POST['B2']),
					"B3"=>array("quantity"=>$_POST['B3quantity'],"price"=>$_POST['B3']),
					);
					
					foreach($seats as $key => $seat){
						if($seat['quantity'] == 0){
							unset($seats[$key]);
						}
					}
				
					$screening = array(
					"movie"=>$_POST['film'],
					"day"=>$_POST['day'],
					"time"=>$_POST['time'],
					"seats"=>$seats,
					"sub-total"=>$_POST['price']);
					
					$_SESSION['cart']['screenings'][] = $screening;
					var_dump($_SESSION);
				}
			?>
			</div>
	<?php include 'footer.php';?>
</body>
</html>