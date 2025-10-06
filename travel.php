<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Cost Estimator</title>
</head>
<body>
    <?php
        $distance = 250;           
        $fuel_consumption = 12; 
        $fuel_price = 65;          

        $fuel_needed = $distance / $fuel_consumption;

        $travel_cost = $fuel_needed * $fuel_price;

        echo "Estimated Travel Cost: ₱" . round($travel_cost, 2);
        ?>
</body>
</html>