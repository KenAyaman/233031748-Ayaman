<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Currency Converter</title>
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
			width: 420px;
			backdrop-filter: blur(5px);
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
		}

		h1 {
			margin-bottom: 20px;
			font-size: 1.8em;
			color: #ffd369;
		}

		input, select {
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
			margin-top: 20px;
			font-size: 1.05em;
			color: #fff;
			text-align: left;
			padding: 10px 20px;
		}

		.result p strong {
			color: #ffd369;
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
		<h1>Currency Converter</h1>

		<form method="post">
			<input type="number" name="amount" placeholder="Enter amount in PHP" min="1" required><br>

			<select name="currency" required>
				<option value="">--Select Currency--</option>
				<option value="USD">US Dollar (USD)</option>
				<option value="EUR">Euro (EUR)</option>
				<option value="JPY">Japanese Yen (JPY)</option>
			</select><br>

			<button type="submit">Convert</button>
		</form>

		<div class="result">
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$amount = $_POST['amount'];
					$currency = $_POST['currency'];

					
					$rateUSD = 0.018; 
					$rateEUR = 0.017; 
					$rateJPY = 2.70;  

					switch ($currency) {
						case "USD":
							$converted = $amount * $rateUSD;
							$symbol = "$";
							break;
						case "EUR":
							$converted = $amount * $rateEUR;
							$symbol = "€";
							break;
						case "JPY":
							$converted = $amount * $rateJPY;
							$symbol = "¥";
							break;
						default:
							$converted = 0;
							$symbol = "";
					}

					echo "<p><strong>Amount in PHP:</strong> ₱" . number_format($amount, 2) . "</p>";
					echo "<p><strong>Converted Amount:</strong> $symbol" . number_format($converted, 2) . " ($currency)</p>";
				}
			?>
		</div>

		<a href="index.php" class="back-btn">← Back to Main Menu</a>
	</div>
</body>
</html>
jjjjj