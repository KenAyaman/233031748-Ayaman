<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
</head>
<body>
    <?php
        $weight = 70; 
        $height = 1.75;
        $bmi = $weight / ($height * $height);
        echo "Your BMI is: " . round($bmi, 2);
    ?>
</body>
</html>