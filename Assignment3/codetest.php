<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Check Movie Meal Deal Code</title>
  <style>
    * {font-family: courier;}
  </style>
</head>

<body>
  <form action="voucherCalcs.php" method='get'>
  <h3>Enter Code</h3>
    <p>
    <input type='text' name='code' id='code' value='' placeholder="22222-22222-SD" pattern="\d{5}-\d{5}-[A-Z]{2}" title="Invalid voucher format" /> <input type='submit' value='check' />
  </p>
  </form>
  
</body>

</html>