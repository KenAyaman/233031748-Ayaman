<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Cost Estimator</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Poppins', sans-serif;
			background: url('home1.jpg') no-repeat center center fixed;
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			color: white;
			margin: 0;
		}
		.container {
			background: rgba(0, 0, 0, 0.5);
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
			text-align: left;
			font-size: 1em;
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
		<h1>Travel Cost</h1>

		<form method="post">
			<input type="number" name="distance" placeholder="Distance (km)" required><br>
			<input type="number" name="consumption" placeholder="Km per liter" required><br>
			<input type="number" name="price" placeholder="Fuel price (₱)" required><br>
			<button type="submit">Calculate</button>
		</form>

		<div class="result">
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$distance = $_POST['distance'];
					$consumption = $_POST['consumption'];
					$price = $_POST['price'];

					$fuel = $distance / $consumption;
					$cost = $fuel * $price;

					echo "<p>Distance: {$distance} km</p>";
					echo "<p>Fuel Needed: " . number_format($fuel, 2) . " L</p>";
					echo "<p>Cost: ₱" . number_format($cost, 2) . "</p>";
				}
			?>
		</div>

		<a href="index.php">← Back</a>
	</div>
</body>
</html>
`