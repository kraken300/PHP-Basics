<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Strings</title>
</head>
<body>
    <?php 
        $str = "An apple a day keeps doctor away day!";

        $str_length = strlen($str);
        echo "The length of the string is " . $str_length;
        echo "<br>";
        
        echo "Number of words is " . str_word_count($str);
        echo "<br>";

        echo "The reverse is ". strrev($str);
        echo "<br>";
        
        echo var_dump($str == strrev(strrev($str)));
        echo "<br>";

        echo "The position is ". strpos($str, "day");
        echo "<br>";

        echo "The replaced is ". str_replace("day", "night", $str);
        echo "<br>";
       
    ?>
</body>
</html>