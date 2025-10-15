<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Math</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Poppins', sans-serif;
			background: url('home1.jpg') no-repeat center center fixed;
			background-size: cover;
			color: #fff;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.container {
			background: rgba(0, 0, 0, 0.45);
			padding: 40px 50px;
			border-radius: 15px;
			text-align: center;
			width: 380px;
			backdrop-filter: blur(5px);
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
		}

		h1 {
			margin-bottom: 20px;
			font-size: 1.8em;
			color: #ffd369;
		}

		input {
			width: 80%;
			padding: 10px;
			margin: 8px 0;
			border: none;
			border-radius: 8px;
			text-align: center;
			font-size: 1em;
		}

		.button {
			display: inline-block;
			background: #ffd369;
			color: #000;
			padding: 10px 20px;
			border-radius: 8px;
			text-decoration: none;
			font-weight: 600;
			transition: 0.3s;
			margin-top: 15px;
			cursor: pointer;
		}

		.button:hover {
			background: #fff;
			color: #000;
			transform: scale(1.05);
		}

		p {
			font-size: 1.1em;
			margin: 10px 0;
			line-height: 1.6;
		}

		.result-box {
			margin-top: 20px;
			background: rgba(255, 255, 255, 0.1);
			padding: 15px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Simple Math</h1>

		<form method="POST">
			<input type="number" name="num1" placeholder="Enter first number" required><br>
			<input type="number" name="num2" placeholder="Enter second number" required><br>
			<button type="submit" class="button">Calculate</button>
		</form>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$a = $_POST['num1'];
				$b = $_POST['num2'];

				$sum = $a + $b;
				$diff = $a - $b;
				$prod = $a * $b;
				$quot = ($b != 0) ? $a / $b : "Undefined (cannot divide by zero)";

				echo "<div class='result-box'>";
				echo "<p><strong>Sum:</strong> $sum</p>";
				echo "<p><strong>Difference:</strong> $diff</p>";
				echo "<p><strong>Product:</strong> $prod</p>";
				echo "<p><strong>Quotient:</strong> $quot</p>";
				echo "</div>";
			}
		?>

		
		<a href="index.php" class="button">← Back to Main Menu</a>
	</div>
</body>
</html>
