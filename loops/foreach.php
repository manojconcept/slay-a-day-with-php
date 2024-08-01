<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0 200px 200px 200px;
    }
</style>

<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    $userdatas = array("pinky", 'frogy', "kinky", "crowky");
    echo '<h3> foreach loop through an array :  $userdatas = array("pinky",\'frogy\',"kinky","crowky")</h3>';
    foreach ($userdatas as $userdata) {
        echo "{$userdata} <hr>";
    }

    echo "<h3> foreach loop through an associative array : \$members = array(\"Peter\"=>\"35\", \"Ben\"=>\"37\", \"Joe\"=>\"43\")</h3>";
    $members = array("peter" => 35, "ben" => "37", "joe" => "43");
    echo "<ul>";
    foreach ($members as $key => $value) {
        echo "<h3><li>$key : $value</li></h3> <hr>";
    };
    echo "</ul>";
    echo "<h3> loop through an object </h3>";
    class Car
    {
        //properties
        public $color;
        public $model;
        //constructor method
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
    }
    $audi = new Car("ash", "b53");
    echo print_r($audi); // it will return Car Object ( [color] => ash [model] => b53 ) 1
    echo "<hr>";
    foreach ($audi as $key => $value) {
        echo "<li>$key : $value </li> <hr>";
    }

    echo "<h3>Foreach Byref</h3>";
    echo "<h3>When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:<h3>";
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $color) {
        if ($color === "blue") $color = "white"; // it will not affected
    }
    print_r($colors);
    echo "<hr>";
    echo "<h3>BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array:</h3>";
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as &$color) {
        if ($color === "red") $color = "violet";
    }
    print_r($colors);
    echo "<hr>";
    echo "<h3>The foreach loop syntax can also be written with the endforeach statement like this</h3>";
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $color) :
        echo "<h3><u>$color</u></h3> <hr>";
    endforeach;



    ?>
</body>

</html>