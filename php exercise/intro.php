<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Introduce Yourself</title>
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

		p {
			font-size: 1.1em;
			line-height: 1.6;
			margin-bottom: 25px;
		}

		.button {
			display: inline-block;
			background: rgba(255, 255, 255, 0.15);
			color: #fff;
			padding: 10px 18px;
			border-radius: 8px;
			text-decoration: none;
			font-weight: 500;
			transition: 0.3s;
		}

		.button:hover {
			background: #ffd369;
			color: #222;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Introduce Yourself</h1>

		<?php
			
			$name = "Ken Ayaman";
			$age = 21;
			$favColor = "blue";

			echo "<p>Hi, I'm <strong>$name</strong>, I am <strong>$age</strong> years old, and my favorite color is <strong>$favColor</strong>.</p>";
		?>

		
		<a href="index.php" class="button">← Back to Main Menu</a>
	</div>
</body>
</html>
