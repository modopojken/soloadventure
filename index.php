<?php
	session_start();
?>
<!doctype html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soloäventyr</title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather%7CMerriweather+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav id="navbar">
	<a class="rättklass" href="index.php">Hem</a>
	<a class="rättklass" href="play.php?page=1">Spela</a>
	<a class="active rättklass" href="edit.php">Redigera</a>
	<a class="logobild" href="index.php"><img src="logobilden.png" alt="logobilden.png"></a>
</nav>	
<main class="content">
	<section>
		<h1>Soloäventyr - La Tristiata</h1>
		<h3>Välkommen till det spännande äventyret om La Tristiata!</h3>

	<!--	<h4>Intro:</h4>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ns6_vqEd5Jc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->

		<p>Du kommer att stöta på intressanta karaktärer, Så som:<br><br></p>

			<h2>Baronen:<br></h2>
			<p>En man med stil och eligans. Om det är någon som kan rädda Tyskland så är det honom.</p>
			<img class="baronen" src="rödebaronen.jpg" alt="baronen"><br><br>
			<h2>Robert Walton:</h2>
			<p>Rätt irrelevant egentligen</p>
			<img src="Robert_Walton.jpg" alt="robertwalton">
			<h2>Alfredos Pissa Pasta 👌👌👌👌👌</h2>
			<p>Alfredo är ett stackars rikemansbarn som blir kär i Violetta. Han är välutbildad med höga ambitioner. <br> Hans restaurangkedja är en av de största i världen</p>
			<img class="hej" src="alfredos.jpg" alt="alfredos">
<?php

?>
</section>
</main>
<script src="js/navbar.js"></script>
</body>
</html>