<?php

// Include the settings file
require_once "settings.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?= $head ?>

	<title><?= $name ?> - Page introuvable</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: 'Montserrat', sans-serif;
			background-color: #f4f4f4;
			color: #444;
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
		}
		.container {
			text-align: center;
			padding: 20px;
			max-width: 600px;
		}
		h1 {
			font-size: 48px;
			margin-bottom: 20px;
			color: #ee7c0d;
			text-transform: uppercase;
		}
		button {
			padding: 10px 20px;
			background-color: #ee7c0d;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 18px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		button:hover {
			background-color: #ff9f4d;
		}
		img {
			margin-top: 30px;
			max-width: 100%;
			height: auto;
			box-shadow: 0px 0px 20px rgba(0,0,0,0.3);
			border-radius: 10px;
			animation-name: pulse;
			animation-duration: 1s;
			animation-iteration-count: infinite;
			animation-timing-function: ease-in-out;
		}
		@keyframes pulse {
			0% { transform: scale(1); }
			50% { transform: scale(1.05); }
			100% { transform: scale(1); }
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="/img/404.gif" alt="Image d'animal animé">
		<h1>OUPS ! CETTE PAGE N'EXISTE PAS.</h1>
		<button onclick="window.location.href='/';">Retourner à l'accueil</button>
	</div>
</body>
</html>