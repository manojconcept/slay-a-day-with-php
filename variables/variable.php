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
      
    echo "hello wrold";
    echo "<br>";
    echo "hello";
    echo "<br>";
    echo "echo";
    echo "<br>";
    $color = 'black';
    echo "the " . $color . " dog";
    echo "<br>";
    echo "the " . $color . " dog"; //undefined but it shows no error
    echo "<br>";
    echo "the " . $color . " dog"; //undefined but it shous no error
    echo '<br>';
    echo "Hello by PHP echo";
    echo "<br>";
    //multi line
    echo "Hello by
    php echo
    this is multi line
    text printed by php echo statement
    ";
    //escape character
    echo '<br>';
    echo "hello \"sequence\" characters"; // escape character
    echo '<br>';
    $message = 200;
    echo "Message $message ok";
    echo '<br>';
    echo '<br>';
    $fname = "Manoj";
    $lname = "M";
    echo "My name is " . $fname, $lname; // we can pass like this also with comma
    echo '<br>';
    //print "My name is ".$fame,$lname; // we can't pass like this also with comma
    echo '<br>';
    $lang = "php";
    //$ret = echo $lang." is a web development language";
    echo "</br>";
    echo "Value return by pirnt statement ".$lang;

    ?>

</body>

</html>