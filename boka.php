<!DOCTYPE html>
<html lang="se">
<head>
<?php include "backend/if.php" ?>
<link rel="stylesheet" href="css/main.css">
	<meta charset="UTF-8">
	<title>Start</title>
</head>
<body>
	<header>
		<p>Grillska LAN</p>
		<div class="bot">b.y.o.c. lan party</div>
		<nav>
			<ul>
        		<li><a href="index.html">Start</a></div></li>
        		<li><a href="regler.html">Regler</a></li>
        		<li><a href="faq.html">Faq</a></li>
        		<li><a href="turneringar.html">Turneringar</a></li>
        		<li><a href="boka.php">Boka</a><div class="active"></div></li>
        		<li><a href="packlista.html">Packlista</a>
			</ul>
		</nav>
	</header>
	<div class="main">
		<h1>Boka</h1>
		<form action="backend/boka.php" method="post">
			<input type="text" name="user" required placeholder="Användarnamn">
			<input type="text" name="name" required placeholder="För och efternamn">
			<input type="email" name="mail" required placeholder="E-post"><br \>
			<input type="checkbox" id="grillska" name="grillska">Jag går inte på Grillska Gymnasiet
				<div id="autoUpdate" class="autoUpdate">
					<input type="checkbox" id="age" name="age">Jag är under 18år
					<div id="autoUpdateAge" class="autoUpdateAge">
						<input type="text" name="vuxenNamn" placeholder="Målsmans Namn">
						<input type="text" name="vuxenNummer" placeholder="Målsmans Telefon">
					</div>
				</div>
			<br \>
			<div class="table-con">
				<table class="seats">
					<tbody><tr>
						<?php include "backend/seats1-32.php" ?>
						<br>	
					</tr></tbody>
					<tbody><tr>
						<?php include "backend/seats32-64.php" ?>
					</tr></tbody>
			<input type="submit">
		</form>
	</div>
</body>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/show.js"></script>
<script type="text/javascript" src="js/analytics.js"></script>
</html>	