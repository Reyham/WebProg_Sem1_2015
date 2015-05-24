<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>

<? php
$array = array[
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
];


$code = "";

 $code =$_POST["code"];

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$arr1=code_split($code);
$a=($arr1[0]*$arr1[1]+$arr1[2])*$arr1[3]+$arr1[4])%26 ;
$b=($arr1[6]*$arr1[7]+$arr1[8])*$arr1[9]]+$arr1[10])%26;
if ($array[$a]==$arr1[12] && $array[$b]==$arr1[13])
{

return true;}
else 
	return false;


?>

</body>
</html>