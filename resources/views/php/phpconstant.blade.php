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
    //php constant with case sensitivity
    define('welcome','hello my name is sharada bohara');
    echo welcome;
    echo "<hr/>";

    //php constant without case sensetivity (CASE INSENSITIVITY) 
    // define('welcome','hellomy name is sharada bohara',true);====> not supported
    // echo WELCOME;

    define("car","volvo");
    function mycar(){
        echo car;  //calling constant here i.e. car()
    }
    //calling of function mycar()
    mycar();
    ?>
</body>
</html>