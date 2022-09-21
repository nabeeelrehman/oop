<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multi Dimensional Array</title>
</head>
<body>
<h3>Multi Dimesional Array</h3>


<?php

$blogs = [
	['mario party', 'mario', 'lorem', 5],
	['nabeel nprty', 'nabeel', 'lorem', 6],
	['hassan party', 'hassan', 'lorem', 7]

];

//echo $blogs[1][1];
print_r($blogs[2][1]);


?>

<h4>Multi Dimensional Key Values</h4>

<?php

	$blogs=[

		[
			'title'   => 'Mario Party',
			'name'    =>  'Mario',
			'content' =>  'Lorem Ipsum',
			'pages'   => 5

		],
		[

			'title' => 'Nabeel party',
			'name' => 'Nabeel',
			'content' =>'lorem ipsum',
			'pages' => 6,
		],
		[
			'title' => 'hassan party',
			'name' => 'Hassan',
			'content' => 'Lorem Ipsum',
			'pages' => 7,
		]
	];


	print_r ($blogs[1]['name']);

?>



</body>
</html>