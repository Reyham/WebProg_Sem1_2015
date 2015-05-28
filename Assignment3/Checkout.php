<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Silverado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="functions.js"></script>
</head>

<body>
	<?php include 'header.php';?>

<div class="BookingPanel">
<h1> Success!!</h1>
<p> Congratulations <?php echo $_POST['name'];?><br>
<p> An electronic version of your tickets have been sent to <?php echo $_POST['email'];?><br>
<p> Your unique login number is  <h2><?php echo rand(10000,99999)?></h2></p><br>

</div>
	<?php
	
		if(isset($_POST['id'])){
		$id = $_POST['id'];
	
		$_SESSION['cart']['screenings'] = array_values($_SESSION['cart']['screenings']);
		};
		if(isset($_SESSION['cart']['screenings'][0])){
		echo '<div id="ticketsPanel">';
		foreach($_SESSION['cart']['screenings'] as $id => $ticket){
			$rows = count($ticket['seats']);
			echo '<div class="ticketInfo">';
			echo '<div class="TicketTitle">'.$ticket['movie']."</div>
			
				<table border='1px solid black'>
				<tr><td>Movie</td><td>Ticket Type</td><td>Quantity</td><td>Day</td><td>Time</td></tr>";
			foreach($ticket['seats'] as $key => $row){
				echo "<tr><td>".$ticket['movie']."<td>".$key."</td><td>".$row['quantity']."</td><td>".$ticket['day']."</td><td>".$ticket['time']."</td></tr></table>";
			echo '<img id="barcode" src="barcode.jpg" alt="Barcode >';
		
			}
		echo '<br></div>';
			
		};
				
		
			
	

	
	
	
	
		echo '</div>';
		echo '</div>';
		}
		?>
		<?php
	
$seat_prices1= array(
	"SA" => "12",
    "SP" => "10",
	"SC" => "8",
    "FA" => "25",
	"FC" => "20",
    "B1" => "20",
	"B2" => "40",
    "B3" => "60",

);
$seat_prices2= array(
	"SA" => "19",
    "SP" => "15",
	"SC" => "12",
    "FA" => "30",
	"FC" => "25",
    "B1" => "30",
	"B2" => "60",
    "B3" => "90",
);

//	$total = 0;
//			foreach($_SESSION['cart']['screenings'] as $id => $ticket){
//				foreach($ticket['seats'] as $key => $row){
//					if ($ticket['day']=="Saturady"||$ticket['day'=="Sunday"]||$ticket['time']!="1pm"){
//			$total= $total+ $seat_prices2[$key] * $row['quantity'];
 //}
//	else {
//		
//			$total= $total+ $seat_prices1[$key] * $row['quantity'];
//					}}}
?>
<? php if(isset($_POST['sendReservation']))
{
    $to      =  $_Post['email'];
    $subject = 'Movie Tickets';
    $message = 'Here are your movie tickets'

    $headers = 'From: silverado@cinema.com' . "\r\n" .
        'Reply-To: Silverado@cinemas.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
	?>

<div>
</div>


</body>
<?php include 'footer.php';?>
</html>
