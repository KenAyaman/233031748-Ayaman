<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
        $sentence = "Learning PHP is fun and powerful.";
        $char_count = strlen($sentence);
        $word_count = str_word_count($sentence);
        $uppercase = strtoupper($sentence);
        $lowercase = strtolower($sentence);

        echo "Original Sentence: $sentence\n";
        echo "Number of Characters: $char_count\n";
        echo "Number of Words: $word_count\n";
        echo "Uppercase: $uppercase\n";
        echo "Lowercase: $lowercase\n";
?>

</body>
</html>