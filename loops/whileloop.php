<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    echo "<h1> while loop </h1>";
    $start = 0;
    while($start<5){
        echo "<h3>line no :{$start}</h3><hr>";
        $start++;
    }


    ?>
</body>
</html>