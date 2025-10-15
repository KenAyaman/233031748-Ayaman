<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BMI Calculator</title>
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
			background: rgba(0, 0, 0, 0.53);
			padding: 40px 50px;
			border-radius: 15px;
			text-align: center;
			width: 400px;
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

		button {
			background: #ffd369;
			color: #222;
			border: none;
			padding: 10px 20px;
			border-radius: 8px;
			font-weight: 600;
			cursor: pointer;
			transition: 0.3s;
			margin-top: 10px;
		}

		button:hover {
			background: #fff;
			color: #222;
		}

		.result {
			margin-top: 15px;
			font-size: 1.1em;
			color: #fff;
		}

		.back-btn {
			display: inline-block;
			margin-top: 20px;
			text-decoration: none;
			color: #fff;
			background: rgba(255, 255, 255, 0.15);
			padding: 10px 18px;
			border-radius: 8px;
			transition: 0.3s;
		}

		.back-btn:hover {
			background: #ffd369;
			color: #222;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>BMI Calculator</h1>

		<form method="post">
			<input type="number" name="weight" step="0.01" placeholder="Enter Weight (kg)" required><br>
			<input type="number" name="height" step="0.01" placeholder="Enter Height (m)" required><br>
			<button type="submit">Compute BMI</button>
		</form>

		<div class="result">
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$weight = $_POST['weight'];
					$height = $_POST['height'];

					if ($height > 0) {
						$bmi = $weight / ($height * $height);
						echo "<p>⚖️ Your BMI is: <strong>" . number_format($bmi, 2) . "</strong></p>";

						if ($bmi < 18.5) {
							echo "<p>🟡 Status: Underweight</p>";
						} elseif ($bmi < 24.9) {
							echo "<p>🟢 Status: Normal weight</p>";
						} elseif ($bmi < 29.9) {
							echo "<p>🟠 Status: Overweight</p>";
						} else {
							echo "<p>🔴 Status: Obese</p>";
						}
					} else {
						echo "<p>Please enter a valid height.</p>";
					}
				}
			?>
		</div>

		<a href="index.php" class="back-btn">← Back to Main Menu</a>
	</div>
</body>
</html>
