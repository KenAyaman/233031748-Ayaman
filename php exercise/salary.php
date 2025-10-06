<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculator</title>
</head>
<body>

    <?php
        $basic_salary = 30000;
        $allowance = 5000;
        $deduction = 2000;
        $net_salary = $basic_salary + $allowance - $deduction;
        echo "Net Salary: ₱$net_salary";
?>

    
</body>
</html>