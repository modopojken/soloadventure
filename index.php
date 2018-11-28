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
	 <link rel="stylesheet" href="css/bootstrap.css">
	 <link rel="stylesheet" href="style.css">
	 	
</head>
<body>
	<main class="content">
	<div class="container-fluid">
	<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.php">Hem</a>
	<a class="navbar-brand" href="play.php?page=1">Spela</a>
	<a class="navbar-brand" href="edit.php">Redigera</a>
	<a class="navbar-brand" href="index.php"><img class="logobild" src="logobilden.png" alt="logobilden.png"></a>
</nav>
</div>
	<div class="container-fluid">
		<div class="col-sm-12">
	<!--<section>-->
		<h1>Soloäventyr - La Tristiata</h1>
		<h3>Välkommen till det spännande äventyret om La Tristiata!</h3>
		<p>Du kommer att stöta på intressanta karaktärer, Så som:<br><br></p>
	</div>
				<div class="row">
					<div class="col-sm-4">
						<h2>Baronen:<br></h2>
						<p>En man med stil och eligans. Om det är någon som kan rädda Tyskland så är det honom.</p>
						<img src="redbaronnew.png" alt="rödebaronen.jpg"> <br><br>
					</div>
				
			<div class="col-sm-4">
				<h2>Robert Walton:</h2>
				<p>Rätt irrelevant egentligen</p>
				<img src="robertwaltonnew.png" alt="Robert_Walron.jpg">
		
			</div>
			<div class="col-sm-4">
				<h2>Alfredos Pissa Pasta 👌👌👌👌</h2>
				<p>Alfredo är ett stackars rikemansbarn som blir kär i Violetta.</p>
				<p>Han är välutbildad med höga ambitioner.</p>
				<p>Hans restaurangkedja är en av de största i världen</p>
				<img src="alfredos.jpg" alt="alfredos">
			</div>
		<!--</section>-->
	</div>
</div>
<?php

?>


</main>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>