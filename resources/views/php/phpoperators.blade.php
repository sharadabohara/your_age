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
    $x=90;
    $y=65;

    echo $x+$y;
    echo "<hr/>";

    echo $x-$y;
    echo "<hr/>";

    echo $x*$y;
    echo "<hr/>";

    echo $x/$y;
    echo "<hr/>";

    //Comparision operators
    echo "Comparision Operators";
    echo "<br>"; //equal to ==
    $x=400;
    $y="400";
    var_dump($x==$y);
    echo "<br>";
    //identical (false because type is different)
    $x=400;
    $y="400";
    var_dump($x===$y);
    echo "<hr/>";

    //Not equal
    echo "not equal ex.";
    echo "<br>";
    $x=400;
    $y="400";
    var_dump($x!=$y);
    echo "<br>";
    var_dump($x<>$y);
    echo "<hr/>";

    echo "greater than example";
    echo "<br>";
    $x=400;
    $y="400";
    var_dump($x>$y);
    echo "<hr/>";

    echo "spaceship value";
    echo "<br>";
    $x=400;
    $y="400";
    var_dump($x<=>$y);
    echo "<hr/>";

    echo "Assignment Operators";
    echo "<br>";
    $x=400;
    $y="400";
    echo $x+=$y;
    echo "<hr/>";

    echo "Increment-Decrement Operators";
    echo "<br>";
    echo "a) Post-Increment Operators"; echo "<br>";
    $x=400;
    echo $x++;
    echo "<br>";
    echo "b) Pre-Increment Operators";
    echo "<br>";
    $x=400;
    echo ++$x;
    echo "<hr/>";






    ?>
</body>
</html>