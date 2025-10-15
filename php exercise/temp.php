<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Temperature Converter</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Poppins', sans-serif;
			background: url('home1.jpg') no-repeat center center fixed;
			background-size: cover;
			color: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
		}
		.container {
			background: rgba(0,0,0,0.53);
			padding: 35px;
			border-radius: 15px;
			text-align: center;
			width: 380px;
			backdrop-filter: blur(6px);
		}
		h1 {
			color: #ffd369;
			margin-bottom: 20px;
		}
		input {
			width: 80%;
			padding: 8px;
			margin: 7px 0;
			border: none;
			border-radius: 8px;
			text-align: center;
			font-size: 1em;
		}
		button {
			background: #ffd369;
			color: #222;
			border: none;
			padding: 8px 20px;
			border-radius: 8px;
			cursor: pointer;
			margin-top: 10px;
			font-weight: 600;
		}
		button:hover {
			background: #fff;
		}
		.result {
			margin-top: 20px;
			font-size: 1em;
			text-align: left;
		}
		a {
			display: inline-block;
			margin-top: 15px;
			text-decoration: none;
			color: #fff;
			background: rgba(255,255,255,0.15);
			padding: 8px 15px;
			border-radius: 8px;
		}
		a:hover {
			background: #ffd369;
			color: #222;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Temperature Converter</h1>

		<form method="post">
			<input type="number" name="celsius" placeholder="Enter Celsius" step="0.1" required><br>
			<button type="submit">Convert</button>
		</form>

		<div class="result">
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$c = $_POST['celsius'];
					$f = ($c * 9/5) + 32;

					echo "<p><strong>Celsius:</strong> {$c}°C</p>";
					echo "<p><strong>Fahrenheit:</strong> " . number_format($f, 2) . "°F</p>";
				}
			?>
		</div>

		<a href="index.php">← Back</a>
	</div>
</body>
</html>
