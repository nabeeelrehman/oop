<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>

<h3>Array</h3>
<?php

//$car = ['toyota', 'honda', 'Audi'];
//echo $car[0];

$car = array('toyota', 'honda', 'audi');

$car[] = 'hummer';

array_push ($car, 'Prado');
echo "<pre>";
var_dump ($car);
echo "</pre>";

$car = ['car'=>'Honda', 'model'=>2005, 'color'=>'red'];
echo "<pre>";
var_dump ($car);
echo "</pre>";
echo ($car['car']);


$subjects = [
        [
            'title'=>'nabeel party',
            'Author' => 'nabeel',
            'Age' => 30

        ],
        [
            'title'=>'hassan Party',
            'Author'=> 'Hassan',
            'Age'=>32
        ],
        [
            'title'=>'aqeel party',
            'Author'=>'aqeel',
            'Age' => 34

        ]

];
//echo "<pre>";
// var_dump($subject) ;
// echo "</pre>";

for($i=0; $i < count($subjects); $i++){

   echo "<pre>";
    echo $subjects[$i]['title'];
    echo "</pre>";
}

?>    

<ul>
    <?php foreach($subjects as $subject) {?>
       <li>
        <h3><? echo $subject['title'];?></h3>
        <p><? echo $subject['Author'];?></p>
        <div><? echo $subject['Age'];?></div>
    </li>
    <?php }?>
</ul>


<?php
$i= 0;
while($i < count($subjects)){
    echo $subjects[$i]['Author'];
    $i++;

}
?>



</body>
</html>