<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>
    <?php
        $amount_php = 10000;

        $rate_usd = 0.018;   
        $rate_eur = 0.017;   
        $rate_jpy = 2.65;    

        $amount_usd = $amount_php * $rate_usd;
        $amount_eur = $amount_php * $rate_eur;
        $amount_jpy = $amount_php * $rate_jpy;

        echo "Amount in PHP: ₱$amount_php\n";
        echo "Converted to USD: $" . round($amount_usd, 2) . "\n";
        echo "Converted to EUR: €" . round($amount_eur, 2) . "\n";
        echo "Converted to JPY: ¥" . round($amount_jpy, 2) . "\n";
        ?>
</body>
</html>