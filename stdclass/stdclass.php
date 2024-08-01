<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//string
$person = '{"first_name":"john","age":"30"}'; //json string
echo $person;
echo "<hr>";
//echo json_decode($person) // Object of class stdClass could not be converted to string
//print(json_decode($person)); // Object of class stdClass could not be converted to string
json_decode($person); // converting the json string to an array
print_r(json_decode($person)); //stdClass Object ( [first_name] => john [age] => 30 )
echo '<hr>';
print_r((object)$person); // stdClass Object ( [scalar] => {"first_name":"john","age":"30"} )
echo "<hr>";
print_r(json_decode($person, true)); // Array ( [first_name] => john [age] => 30 )
echo "<hr>";
var_dump(json_decode($person));
echo "<hr>";
var_dump(array("manoj","super","jani")); //array(3) { [0]=> string(5) "manoj" [1]=> string(5) "super" [2]=> string(4) "jani" }
echo "<hr>";
var_dump(array("name"=>"manoj","codename" => "mm")); //array(2) { ["name"]=> string(5) "manoj" ["codename"]=> string(2) "mm" }
echo "<hr>";
//type casting converting an array into object
var_dump((object)array("name"=>"manoj","codename" => "mm")); // object(stdClass)#1 (2) { ["name"]=> string(5) "manoj" ["codename"]=> string(2) "mm" }
echo "<hr>";
var_dump((object)$person);
//creating an object without class
// new stdClass();
echo "<hr>";
$person = new \stdClass();
$person->name = "manojconcept";
$person -> skintone = "green";
print_r($person);
echo "<hr>";
var_dump($person);
echo "<hr>";
var_dump((array)$person);
echo "<hr>";
