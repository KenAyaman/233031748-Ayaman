<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Grading System</title>
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
		<h1>Simple Grading System</h1>

		<form method="post">
			<input type="number" name="math" placeholder="Math Score" min="0" max="100" required><br>
			<input type="number" name="english" placeholder="English Score" min="0" max="100" required><br>
			<input type="number" name="science" placeholder="Science Score" min="0" max="100" required><br>
			<button type="submit">Compute Grade</button>
		</form>

		<div class="result">
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$math = $_POST['math'];
					$english = $_POST['english'];
					$science = $_POST['science'];

					$average = ($math + $english + $science) / 3;

					if ($average >= 90) {
						$grade = "A";
						$remark = "Excellent!";
					} elseif ($average >= 80) {
						$grade = "B";
						$remark = "Very Good!";
					} elseif ($average >= 70) {
						$grade = "C";
						$remark = "Good.";
					} elseif ($average >= 60) {
						$grade = "D";
						$remark = "Needs Improvement.";
					} else {
						$grade = "F";
						$remark = "Failed.";
					}

					echo "<p><strong>Math:</strong> $math</p>";
					echo "<p><strong>English:</strong> $english</p>";
					echo "<p><strong>Science:</strong> $science</p>";
					echo "<p><strong>Average:</strong> " . number_format($average, 2) . "</p>";
					echo "<p><strong>Grade:</strong> $grade</p>";
					echo "<p><strong>Remarks:</strong> $remark</p>";
				}
			?>
		</div>

		<a href="index.php" class="back-btn">← Back to Main Menu</a>
	</div>
</body>
</html>
