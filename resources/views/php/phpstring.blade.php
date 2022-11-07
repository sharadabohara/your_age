<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //count number of words
    echo str_word_count('hello world');
    echo "<br>";

    //reverse string
    echo strrev('hello world');
    echo "<br>";

    //replace text inside a string
    echo str_replace('world','john',"hello world");
    echo "<br>";

    //search for text inside string (starting position of any word)
    echo strpos("hello world", 'world');   
    ?>


</body>
</html>