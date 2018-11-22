<?php
	session_start();
?>
<!doctype html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Soloäventyr - Spela</title>
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
<main class="contentplay">
	<section>
		<h1>Spela</h1>
<!--
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit hic aliquid nostrum quibusdam veritatis? Eaque accusantium odit id deserunt, quae minima adipisci nesciunt illum ipsa ea placeat, earum laboriosam corrupti.</p>
		<footer class="gotopagelinks">
			<p>
				<a href="play.php?page=1">Nästa sida</a>
				<a href="play.php?page=2">Gå till sidan</a>
			</p>
		</footer>
-->
<?php
	include_once 'include/dbinfo.php';

	// PDO

	$dbh = new PDO('mysql:host=localhost;dbname=' . $db . ';charset=utf8mb4', $dbuser, $dbpass);

	//echo "<pre>" . print_r($_GET,1) . "</pre>";
	

	echo " <a class=\"restart\" href=\"?page=1\">Starta om spelet!</a>";


	if (isset($_GET['page'])) {



		// TODO load requested page from DB using GET
		// prio before session
		// set session to remember
		$filteredPage = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);

		
		$stmt = $dbh->prepare("SELECT * FROM story WHERE id = :id");
		$stmt->bindParam(':id', $filteredPage);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		// echo "<pre>" . print_r($row,1) . "</pre>";


		echo "<p><br>" . $row['text'] . "</p>";


		$stmt = $dbh->prepare("SELECT * FROM storylinks WHERE storyid = :id");
		$stmt->bindParam(':id', $filteredPage);
		$stmt->execute();
 
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

		
		

		//echo "<pre>" . print_r($row,1) . "</pre>";

		foreach ($row as $val) {
			echo "<a class=\"knapp\" href=\"?page=" . $val['target'] . "\">". $val['text'] . "<br><br></a>"; 
		}

	} elseif(isset($_SESSION['page'])) {
		// TODO load page from db
		// use for returning player / cookie
	} else {
		// TODO load start of story from DB
		//echo "Det finns inget ID, klicka länken page 1 för att starta";
	}

?>
</section>
</main>
<script src="js/navbar.js"></script>
</body>
</html>