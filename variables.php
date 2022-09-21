<?php
define ('NAME', 'Nabeel');
$name = "Nabeel Rehman";
$age = 20;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Variables</title>
</head>
<body>

<?php echo $name;?><br> 
<?php echo $age;?><br>
<?php echo NAME;?>

<h3>Variale Scopes</h3>
<ol>
	
	<li>Global</li>
	<li>Local</li>
	<li>Static</li>
</ol>


<h5>Global</h5>
<?php

	$x ="My Name is Nabee";
	function test(){
		echo "My name is  $x";

	}
	test();
?>
<h5>Local</h5>
<?php
	
	function test2(){
		$school = 1;
		echo "my school name in  $school";
	}
	test2();
 ?>
<h5>Static</h5>

<?php

function mytest(){

	static $x = 0;
	echo $x;
	$x++;
}
echo "<br>";
mytest(); 
echo "<br>";
mytest();
echo "<br>";
mytest();
?>


</body>
</html>
