<?php

$stringone ="My name is";
$stringtow ="My Age is";
$name = "Nabeel Rehman";
$age = 30;
$string= "check concetenatiohn";
$stringtext= "link up text";
$testing = $stringone ." ". $stringtext;
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Variables</title>
</head>
<body>

<?php echo $stringone. $name. $stringtow. $age ;?><br>

<?php echo $testing;?>

<h3>Escape Chracter</h3>

<?php echo 'this ia "Awesome"' ;?><br>

<?php echo strlen($age); ?><br>

<?php echo strtoupper($name);?> <br>

<?php echo strtolower($name);?><br>

<?php echo str_replace('N', 'w', $name); ?>

</body>
</html>
