<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//string
$person = '{"first_name":"john","age":"30"}'; //json string
echo $person;
echo "<br>";
//echo json_decode($person) // Object of class stdClass could not be converted to string
//print(json_decode($person)); // Object of class stdClass could not be converted to string
json_decode($person); // converting the json string to an array
print_r(json_decode($person)); //stdClass Object ( [first_name] => john [age] => 30 )
echo '<br>';
print_r((object)$person); // stdClass Object ( [scalar] => {"first_name":"john","age":"30"} )
echo "<br>";
print_r(json_decode($person, true)); // Array ( [first_name] => john [age] => 30 )
echo "<br>";
var_dump(json_decode($person));
echo "<br>";
var_dump(array("manoj","super","jani")); //array(3) { [0]=> string(5) "manoj" [1]=> string(5) "super" [2]=> string(4) "jani" }
echo "<br>";
var_dump(array("name"=>"manoj","codename" => "mm")); //array(2) { ["name"]=> string(5) "manoj" ["codename"]=> string(2) "mm" }
echo "<br>";
//type casting converting an array into object
var_dump((object)array("name"=>"manoj","codename" => "mm")); // object(stdClass)#1 (2) { ["name"]=> string(5) "manoj" ["codename"]=> string(2) "mm" }
echo "<br>";
var_dump((object)$person);
