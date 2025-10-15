<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main Menu</title>
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
			width: 380px;
			backdrop-filter: blur(5px);
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
		}

		h1 {
			margin-bottom: 20px;
			font-size: 1.8em;
			color: #ffd369; 
		}

		ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		li {
			margin: 10px 0;
		}

		a {
			display: block;
			text-decoration: none;
			color: #fff;
			font-weight: 500;
			background: rgba(255, 255, 255, 0.15);
			padding: 10px 18px;
			border-radius: 8px;
			transition: 0.3s;
		}

		a:hover {
			background: #ffd369;
			color: #222;
		}

	</style>
</head>
<body>
	<div class="container">
		<h1>PHP Activities Menu</h1>
		<ul>
			<li><a href="intro.php">Introduce Yourself</a></li>
			<li><a href="math.php">Simple Math</a></li>
			<li><a href="area.php">Area & Perimeter of a Rectangle</a></li>
			<li><a href="temp.php">Temperature Converter</a></li>
			<li><a href="var.php">Swapping Variables</a></li>
			<li><a href="salary.php">Salary Calculator</a></li>
			<li><a href="bmi.php">BMI Calculator</a></li>
			<li><a href="string.php">String Manipulation</a></li>
			<li><a href="bank.php">Bank Account Simulation</a></li>
			<li><a href="grade.php">Simple Grading System</a></li>
			<li><a href="currency.php">Currency Converter</a></li>
			<li><a href="travel.php">Travel Cost Estimator</a></li>
		</ul>
	</div>
</body>
</html>
