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

    $cars = array("volov", "bmw", "toyota");
    //so we don't need echo
    var_dump($cars); //array(3) { [0]=> string(5) "volov" [1]=> string(3) "bmw" [2]=> string(6) "toyota" }
    //To access the indexed array
    echo '<br>';
    echo $cars[0];
    echo '<br>';
    echo $cars[1];
    echo '<br>';
    echo $cars[2];
    echo '<br>';
    //echo $cars[3]; //Warning: Undefined array key 3 in /opt/lampp/htdocs/lphp/1.1arrays.php on line 25
    //change the values
    $cars[] = 'alfa remeo'; // adding an element into array
    $cars[3] = 'alfa remo2'; // adding with index 
    var_dump($cars);
    echo '<br>';

    foreach ($cars as $car) {
        $newcars[] = $car; //there life of the scope don't end in here it act as javascript var, so it leaks out of block scop
    }
    $newcars[] = "mango";
    var_dump($newcars); // here we are not declearing a varible like assign the emepty array;
    echo '<br>';
    $array = [1, 2, 3];
    $array2 = [1, 2, 3];
    //don't use this 
    // $arrays[] = "manoj";
    // $arrays[] = "backend dev";
    // $arrays[] = "backend dev";
    echo '<br>';
    //don't use this method;
    //$array = [1, 2, 3];
    // Using empty square brackets []
    //$array[] = 4;
    //$array[] = 5; // creates a new array [4, 5], losing the original array's keys
    //print_r($array); // [4, 5]
    array_push($array, 4, 5);
    // var_dump($arrays);
    echo json_encode($array);
    echo '<br>';
    var_dump(json_decode(json_encode($array))); //array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
    // foreach($array as $ele){
    //     echo "$ele <br>";
    // }
    echo '<br>';
    echo $array === $array; // which it returns only 1 
    echo '<br>';
    echo var_dump($array === $array2); // which it retuns nothing with var_dump false;
    echo '<br>';
    echo var_dump($array !== $array2); // which it retuns 1 with var_dump returns true;
    echo '<br>';
    //loop through an array;
    foreach ($array as $ele) {
        echo "$ele <br>";
    }
    echo '<br>';
    $myArr = [];
    $myArr[0] = "apples";
    $myArr[1] = "bananas";
    $myArr["fruit"] = "cherries";
    foreach ($myArr as $key => $value) {
        echo "$key<br>";
        echo "$value<br>";
    }

    $cars = array('brand' => 'ford', "model" => "mustang", "years" => 1929);
    // echo $cars['years'].'<br>'; // 1929;
    echo "years  : {$cars["years"]}"; //it works


    function myFunction()
    {
        echo "I come from a function!";
    }

    // $myArrsys = array("Volvo", 15,/*myfunction passed as string is func */ "myFunction"); //In PHP, to reference a function by name, you must use a string, or alternatively, you can store a reference to the function as an anonymous function.

    // echo '<br>';
    // $myArrsys[2](); 

    $myArrsys1 = ["car" => "Volvo", 15, "mydearFunc" => "myFunction"];
    echo '<br>';
    echo $myArrsys1[0];
    echo '<br>';
    $myArrsys1["mydearFunc"]();



    ?>
</body>

</html>