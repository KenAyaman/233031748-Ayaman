<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area and Perimeter of a Rectangle</title>
</head>
<body>
    <?php
        $length = 10; 
        $width = 5;  

        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "Length: $length meters\n";
        echo "Width: $width meters\n";
        echo "Area: $area square meters\n";
        echo "Perimeter: $perimeter meters\n";
        ?>
</body>
</html>