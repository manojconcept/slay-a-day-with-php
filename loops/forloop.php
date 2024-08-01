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
    
    echo "<h1> for loop </h1>";

    for($i=0;$i<10;$i++){
        echo "<p>iterated no : {$i}</p> <hr>";
    }


    ?>
</body>
</html>