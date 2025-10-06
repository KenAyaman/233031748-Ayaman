<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Simulation</title>
</head>
<body>
    <?php
        $balance = 10000;
        $deposit = 2500;
        $withdraw = 1500;
        $balance += $deposit;   
        $balance -= $withdraw;  
        echo "Final Account Balance: ₱$balance";
        ?>
</body>
</html>