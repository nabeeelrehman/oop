<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
$blogs = [
		[

			'title' => 'Nabeel party',
			'Autor' => 'Nabeel',
			'Content' => 'lorem ipsum',
			'Pages' => 5
		],
		[

			'title' => 'Hassan party',
			'Autor' => 'Hassan',
			'Content' => 'Lorem ipsum',
			'Pages' => 6
		],
		[
			'title' => 'joshi party',
			'Autor' => 'joshi',
			'Content' => 'lorem ipsum',
			'Pages' => 7
		]

	];

echo '<pre>';
		print_r($blogs) ;
echo '</pre>';

	for($i = 0; $i < count($blogs); $i++){
		echo  $blogs[$i]['title'];
		echo "<br>";

	}
	foreach ($blogs as $blog) {
			echo $blog['title'] . '-'.  $blog['Autor'];
			echo "<br>";
	}
   $i = 0;
	while ($i < count($blogs)) {
		echo $blogs[$i]['Pages'];
		echo "<br/>";
		$i++;
	}

?>


<div class="product">
	

<ul>
	<?php foreach ($blogs as $blog) { ?>
		<li>
			<h3><?php echo $blog['title']?></h3>
			<p><?php echo $blog['Content']?></p>
		</li>

	<?php }?>

</ul>



</div>




</body>
</html>