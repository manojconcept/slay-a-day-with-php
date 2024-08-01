<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
In PHP, echo, print, printf, and print_r are all used to output data to the browser. They differ in what they can output, how many arguments they accept, and their return values:

   <<< Echo>>>
    A language construct that outputs one or more strings directly to the browser. It can take multiple arguments, but has no return value. Echo is slightly faster than print.

    <<<Print>>>
    A language construct that outputs a single string. It can only take one argument and returns a value of 1 to indicate successful execution.

    <<<Printf>>>
    A function that builds a formatted string by inserting values into a template.

    <<<Print_r>>
    A function that prints human-readable information about a variable or expression, including its data type and structure. It's useful for debugging and development purposes. If the return parameter is set to TRUE, it will return the information instead of printing it. 

*/