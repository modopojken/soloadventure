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
	<a href="index.php">Hem</a>
	<a href="play.php?page=1">Spela</a>
	<a class="active" href="edit.php">Redigera</a>
</nav>	
<main class="content">
	<section>
		<h1>Redigera</h1>
<?php
include_once 'include/dbinfo.php';

$dbh = new PDO('mysql:host=localhost;dbname=' . $db . ';charset=utf8mb4', $dbuser, $dbpass);
// TODO protect with your login
// add, edit, delete pages & events
// skriv ut en lista över sidor



//INSERT INTO 'story' ('id', 'text', 'place') VALUES (NULL, 'testtest', 'test');'
$data = [
'text' => "testtest",
'place' => "placetest"
];

if (isset($dbh)) {
	$sql = "INSERT INTO story (text, place) VALUES (:text, :place)";
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);

}


?>
</section>
</main>
<script src="js/navbar.js"></script>
</body>
</html>