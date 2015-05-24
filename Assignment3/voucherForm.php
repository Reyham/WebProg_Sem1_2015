<?php
	session_start();
	if(isset($_SESSION['cart']['screenings'][0])){
	echo '<form method="post" action="cart.php" id="voucherInput">
		<h4>Enter Code test</h4>
		<input type="text" name="code" id="code" value="" placeholder="22222-22222-SD" pattern="\d{5}-\d{5}-[A-Z]{2}" title="Invalid voucher format" /> 
		<input type="submit" name="voucherSubmit" value="check" />
		</form>';
	};
?>