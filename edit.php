<?php
	session_start();
?>
<!doctype html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Soloäventyr - Redigera</title>
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
		<h1>Redigera</h1>



		<form action="edit.php" method="POST" accept-charset="utf-8">
			<h1>Skriv text här:</h1>
			<textarea name="text" rows="3" cols="50"></textarea>
			<h1>Skriv plats här:</h1>
			<input type="text" name="place"><br><br>
			<input type="submit" name="submit">
		</form>

		<form action="edit.php" method="POST" accept-charset="utf-8">



		</form>
		








<?php
include_once 'include/dbinfo.php';

$dbh = new PDO('mysql:host=localhost;dbname=' . $db . ';charset=utf8mb4', $dbuser, $dbpass);
// TODO protect with your login
// add, edit, delete pages & events
// skriv ut en lista över sidor

if (isset($_POST['submit'])) {

	$sql = "INSERT INTO story (text, place) VALUES (:text, :place)";
	$stmt = $dbh->prepare($sql);
	$stmt->bindParam(':text', $_POST['text']);
	$stmt->bindParam(':place', $_POST['place']);
	$stmt->execute();
	var_dump($_POST['text'],$_POST['place']);

}

/*	$sql = "SELECT * FROM story";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$row = $stmt->fetchALL(PDO::FETCH_ASSOC);
	var_dump($row['0'],['text']);
	foreach ($row as $val) {
		echo "<p>" . $val['text'] . "</p>";
		echo "<p>" . $val['place'] . "</p>";
	}*/

	$sql = "UPDATE `story` SET  WHERE 1";
	$stmt = $dbh->prepare($sql);
	$stmt->bindParam(':text', $_POST['text']);
	$stmt->bindParam(':place', $_POST['place']);
	$stmt->execute();


?>
</section>
</main>
<script src="js/navbar.js"></script>
</body>
</html>