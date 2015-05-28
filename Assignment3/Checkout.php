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
<p> Congratulations <? php echo $_POST["name"];?><br>
<p> An electronic version of your tickets have been sent to <? php $_POST["email"];?><br>
<p> Your unique login number is<h2 id="unique_no"></h2></p><br>
<p>The total price for your purchase is <? php echo $price ?><br>
</div>
<div class="Tickets">
<table class="ticketTable"> 
<thead>
    <tr>
<th> Movie Name</th>
<th> Seat Type</th>
<th>Time</th></tr>
</thead>
<tbody>

	<tr>
<td><strong><? php $_POST['movie']?></strong></td>
<td> <? php $_POST['Seat_type'] ?></td>
<td><? php $_POST['day'] ?></td>
<td> <img id="barcode" src="barcode.jpg" alt="Barcode"></td>

</tbody>
</table>
	</div>

<script>
function myFunction() {
    var x = document.getElementById("unique_no")
    x.innerHTML = Math.floor((Math.random() * 100000) + 1);
}
</script>




<?php include 'footer.php';?>
<form action="" method="post">
    <input type="submit" value="Send tickets to email" />
    <input type="hidden" name="button_pressed" value="1" />
</form>
</body>
</html>
