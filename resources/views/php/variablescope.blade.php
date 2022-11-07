<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x="we"; //global variable
    function hello(){
        // echo "hello $x"; //global not for function
        echo "ajkshfskjaoeskd";
        echo "<hr/>";
        }
        hello();
    
    function test(){
        global $x;
       
    }
    test();
    echo "$x"; // global so need here to print
    echo "<br>";

    function test2(){
       static $x=55;
        echo $x;
        $x++;
    }
    test2()
    // echo "<br>";
    // test2()
    // $arrayName = array('' => , );
    // $sports = array('cric' =>10 ,'foot'=> 20 );
    // @foreach ($sports as $sport)
    //     echo $sport;
    // @endforeach
    ?>
    
</body>
</html>