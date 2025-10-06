<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping Variables</title>
</head>
<body>

    <?php
        $a = 5;
        $b = 10;
        echo "Before swapping: a = $a, b = $b\n";
        $temp = $a;
        $a = $b;
        $b = $temp;
        echo "After swapping: a = $a, b = $b\n";
?>  
</body>
</html>