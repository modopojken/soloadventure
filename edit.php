<?php
	session_start();
?>
<!doctype html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Soloäventyr - Redigera</title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Merriweather+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav id="navbar">
	<a href="index.php">Hem</a>
	<a href="play.php?page=1">Spela</a>
	<a class="active" href="edit.php">Redigera</a>
</nav>	
<main class="content">
	<section>
		<h1>Redigera</h1>
<?php
// TODO protect with your login
// add, edit, delete pages & events
// skriv ut en lista över sidor



$dbh = new PDO('INSERT INTO `storylinks`(`id`, `storyid`, `target`, `text`) VALUES ([value-1],[value-2],[value-3],[value-4])');



?>
</main>
<script src="js/navbar.js"></script>
</body>
</html>