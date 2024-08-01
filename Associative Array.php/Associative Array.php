<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* To display the errors without this errors won't be shown in screen*/
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    $car = array('brand' => 'ford', 'model' => 'Mustang', "year" => 1964);
    // echo $car;
    echo $car['model'];
    echo '<br>';
    $car['brand'] = "lamborgini"; //modify and due to echo on frond it retruns the value it won't spit error;
    // echo '<br>';
    $car['location'] = 'theni'; // newly added key value property in frond of echo so it don't;
    // echo '<br>';
    echo $car['location'];
    echo '<br>';
    foreach ($car as $x => $y) {
        echo "{$x} : {$y} <br>";
    };
    $result =  json_encode($car);
    echo var_dump($result); //string(71) "{"brand":"lamborgini","model":"Mustang","year":1964,"location":"theni"}"
    echo '<br>';
    echo '<br>';     
    echo var_dump(json_decode($result)); //object(stdClass)#1 (4) { ["brand"]=> string(10) "lamborgini" ["model"]=> string(7) "Mustang" ["year"]=> int(1964) ["location"]=> string(5) "theni" }
    

    ?>
</body>

</html>