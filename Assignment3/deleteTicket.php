<head>
	<title>Silverado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="functions2.js"></script>
</head>
<?php
	session_start();
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		unset($_SESSION['cart']['screenings'][$id]);
		$_SESSION['cart']['screenings'] = array_values($_SESSION['cart']['screenings']);
		};
		if(isset($_SESSION['cart']['screenings'][0])){
		echo '<div id="ticketsPanel">';
		foreach($_SESSION['cart']['screenings'] as $id => $ticket){
			$rows = count($ticket['seats']);
			echo '<div class="ticketInfo">';
			echo '<div class="TicketTitle">'.$ticket['movie']."</div>,<br>
				Showing at ".$ticket['day'].",".$ticket['time']."<br>
				<table border='1px'>
				<tr><td>Ticket Type</td><td>Quantity</td><td>Subtotal</td></tr>";
			foreach($ticket['seats'] as $key => $row){
				echo "<tr><td>".$key."</td><td>".$row['quantity']."</td><td>".$row['price']."</td></tr>";
			}
			echo '<tr><td colspan="2" style="text-align:right">Sub Total:</td><td>'.$ticket['sub-total'].'</td><tr>';
			echo "</table><br>";
			echo '<button type="button" class="deleteTicket"" data-id="'.$id.'">Delete ticket</button>';
			echo '</div>';	
		};
		echo '</div>';
			$total = 0;
			foreach($_SESSION['cart']['screenings'] as $id => $ticket){
			$total += $ticket['sub-total'];
			};
			
			$array = array(
			"25" => "Z",
			"24" => "Y",
			"23" => "X",
			"22" => "W",
			"21" => "V",
			"20" => "U",
			"19" => "T",
			"18" => "S",
			"17" => "R",
			"16" => "Q",
			"15" => "P",
			"13" => "N",
			"14" => "O",
			"12" => "M",
			"11" => "L",
			"10" => "K",
			"9" => "J",
			"8" => "I",
			"7" => "H",
			"6" => "G",
			"5" => "F",
			"4" => "E",
			"3" => "D",
			"2" => "C",
			"1" => "B",
			"0" => "A",
			);
	
			$code = "";
			
			if(isset($_POST['code'])){
				$code =$_POST["code"];
			};

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			};
			
	function code_split($input){
		$reformat = str_replace('-','',$input);
		echo "<script>alert('".$reformat."');</script>";
		$charArray = str_split($reformat);
		return $charArray;
	};
	
	$voucherValidation = false;
	
	if(isset($_POST['code'])){
		$arr1=code_split($code);
		$arr1 = array_values($arr1);
		$a=(($arr1[0]*$arr1[1]+$arr1[2])*$arr1[3]+$arr1[4])%26 ;
		$b=(($arr1[5]*$arr1[6]+$arr1[7])*$arr1[8]+$arr1[9])%26;
		echo "<script>alert('".$array[$a]." and ".$arr1[9]."');</script>";
	
		if ($array[$a]==$arr1[10] && $array[$b]==$arr1[11])
		{
		$voucherValidation = true;
		}
		else {
			$voucherValidation = false;
		};
	};
	
	$discount = 0;
	
	if ($voucherValidation == true){
		$discount = .2;
	}
	else{
		$discount = 0;
	}
			
			echo '<div id="balancePanel"> Total: '.$total.'<br>';
			echo 'Voucher Discount: '.$discount.'<br>';
			$gtotal = $total-($discount*$total);
			echo 'Grand Total: '.$gtotal.'<br>';
			echo '<input type="submit" name="sendReservation" value="submitted!"/></div>';
	
			if(isset($_POST['sendReservation'])){
			$_POST=$_SESSION;
			}
		}
		else
			echo '<div style="color:white">Shopping cart is empty.</div>'
?>