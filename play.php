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
</main>
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

<div class="container">

<?php
	include_once 'include/dbinfo.php';

	// PDO

	$dbh = new PDO('mysql:host=localhost;dbname=' . $db . ';charset=utf8mb4', $dbuser, $dbpass);

	//echo "<pre>" . print_r($_GET,1) . "</pre>";
	
	
			echo 	"<div class='container-fluid'>
						<div class='row'>
							<div class='col-2'> 
							</div>
							<div class='col-8'> 
							</div>
							<div class='col-2'> 
						<a class='texten' \"restart\" href=\"?page=1\">Starta om spelet!</a>
							</div>
						</div>
					</div>";
	

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


		echo "<div class='container-fluid'>
					<div class='row'>
						<div class='col-12 text-center'>
							<p class='texten'><br>" . $row['text'] . "</p>
					</div>
				</div>
			</div>";


		$stmt = $dbh->prepare("SELECT * FROM storylinks WHERE storyid = :id");
		$stmt->bindParam(':id', $filteredPage);
		$stmt->execute();
 
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

		
		

		//echo "<pre>" . print_r($row,1) . "</pre>";

		foreach ($row as $val) {
			echo "<div class='container-fluid'>
					<div class='row text-center'>
						<div class='col-sm-12 spela'>
							<a class='texten' href=\"?page=" . $val['target'] . "\">". $val['text'] . "
							</a>
						</div>
					</div>
				</div>
					"; 
		}

	} elseif(isset($_SESSION['page'])) {
		// TODO load page from db
		// use for returning player / cookie
	} else {
		// TODO load start of story from DB
		//echo "Det finns inget ID, klicka länken page 1 för att starta";
	}

?>
</div>
</section>
</main>
<script src="js/navbar.js"></script>
</body>
</html>