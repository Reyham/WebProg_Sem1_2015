<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Silverado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script>
		document.createElement('main');
		function submitButton(){
			alert("Your enquiry has been submitted.");
		}
	</script>
</head>

<body>
	<?php include 'header.php';?>
	
	<main style="overflow:hidden">
		<div class="ContactPanel">
			<form method="post" action='http://titan.csit.rmit.edu.au/~e54061/wp/form-tester.php' onsubmit="submitButton()" style="text-align:initial;">
				<label>Name:</label> <input type="text" name="name" required><br><br>
				<label>Email:</label> <input type="email" name="email" required><br><br>
				<label>Subject:</label> <select name="subject" required>
										<option value="">Select</option>
										<option value="general">General enquiry</option>
										<option value="group">Group and corporate bookings</option>
										<option value="opinion">Suggestions and complaints</option>
										</select><br><br>
				Message: <br><br><textarea cols=40 rows=4 name="message" required></textarea><br><br>
				<input type="Submit" name="">
			</form>
		</div>
	</main>
	
	<?php include 'footer.php';?>
	
</body>
</html>
