<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Swap Variables</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
	body{font-family:'Poppins',sans-serif;
		background:url('home1.jpg') no-repeat center center fixed;
		background-size:cover;
		color:#fff;margin:0;
		display:flex;
		justify-content:center;
		align-items:center;
		height:100vh;}
	
	.container{background:rgba(0,0,0,0.45);
		padding:40px 50px;
		border-radius:15px;
		text-align:center;
		width:380px;
		backdrop-filter:blur(5px);
		box-shadow:0 4px 15px rgba(0,0,0,0.3);}

	h1{color:#ffcc70;
		margin-bottom:20px;}

	input{width:80%;
		padding:10px;
		margin:8px 0;
		border-radius:8px;
		border:none;
		text-align:center;}

	.button{display:inline-block;
		background:#ffcc70;
		color:#000;
		padding:10px 20px;
		border-radius:8px;
		text-decoration:none;
		font-weight:600;
		margin-top:15px;
		cursor:pointer;
		transition:0.3s;}

	.button:hover{background:#fff;
		color:#ffcc70;
		transform:scale(1.05);}

	.result-box{background:rgba(255,255,255,0.1);
		padding:15px;
		border-radius:10px;
		margin-top:20px;}
		
</style>
</head>
<body>
<div class="container">
<h1>Swap Variables</h1>
<form method="POST">
	<input type="text" name="a" placeholder="Enter value for A" required><br>
	<input type="text" name="b" placeholder="Enter value for B" required><br>
	<button type="submit" class="button">Swap</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$a = $_POST['a'];
	$b = $_POST['b'];
	$temp = $a;
	$a = $b;
	$b = $temp;
	echo "<div class='result-box'>";
	echo "<p><strong>After swapping:</strong></p>";
	echo "<p>A = $a</p>";
	echo "<p>B = $b</p>";
	echo "</div>";
}
?>
<a href="index.php" class="button">← Back to Main Menu</a>
</div>
</body>
</html>
