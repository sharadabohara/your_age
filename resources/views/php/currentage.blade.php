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
    // date_default_timezone_set('Asia/Kathmandu'); 
    $birthdate=date_create("1999-01-22");
    $todaydate=today();
    // $todaydate = strtotime($timestamp);  
    $date=date_diff($todaydate,$birthdate);
    echo $date->format("%a days");
    
    ?>
</body>
</html>