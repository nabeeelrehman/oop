<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array</title>
</head>
<body>

<?php
//Indexed Array

$books = ['English', 'Urdu', 'Maths'];
echo $books[0];
echo "<br>";
echo $books[1];
echo "<br/>";
echo $books[2];
echo "<br/>";

$subject = array('English', 'Urdu', 'Maths');
echo $subject[0];
echo "<br>";
echo $subject[1];
echo "<br>";
echo $subject[2];
echo "<br>";

//$subject[] = 'Physics';
//print_r ($subject);


array_push($subject, 'Pakstudies');
print_r ($subject);


$ages = [20, 30, 40 ];
echo $ages[0];
echo "<br>";
echo $ages[1];
echo "<br>";
echo $ages[2];
echo "<br>";

?>


<?php

$paper = ['english', 'urdu', 'Maths'];
//echo $paper [0];
//print_r($paper);
//$paper[]= "Arabic";
array_push($paper, 'Pakstudies');
print_r($paper);

?>

=========================================

<h3>MultiDimensional Array</h3>

<?php

$cups =['cup'=>'blue', 'jug' => 'transparent',  'bottle'=> 'blue' ];

//echo $cups['cup'];
$cups ['tea']= 'set';

print_r ($cups). "<br/>";
?>








</body>
</html>