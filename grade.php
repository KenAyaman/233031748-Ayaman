<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading Systemument</title>
</head>
<body>
    <?php
        $math = 85;
        $english = 78;
        $science = 92;

        $average = ($math + $english + $science) / 3;


        if ($average >= 90) {
            $grade = 'A';
        } elseif ($average >= 80) {
            $grade = 'B';
        } elseif ($average >= 70) {
            $grade = 'C';
        } elseif ($average >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "Average Score: " . round($average, 2) . "\n";
        echo "Grade: $grade";
        ?>

    
</body>
</html>