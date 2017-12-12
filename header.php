<?php
include './connect.php';
include './class/Movie.php';
include './class/Actor.php';
include './class/Director.php';
//$bdd = new Bdd;
$movie = new Movie();
$director = new Director();
$actor = new Actor();
?>
<!doctype html>
<html>
<title>TD 1</title>

<link rel="stylesheet" href="./style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
<body>
<header>
		<ul id="navigation">
			<li><a href="./index.php">Accueil</a></li>
		</ul>
	</header>
