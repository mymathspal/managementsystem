<?php
//$pdo = new PDO('mysql:host=mysql;dbname=myapp', 'root', 'root');
echo "Connected to the database successfully!<br>
my name is Nana Kwame and this is my first PHP application.<br>
<br>";

$text = "Hello, World!";
echo "<h2>I love to write $text!!</h2>";

$x = 5;
var_dump("I love $x"); // This will output: string(8) "I love 5"


$x = $y = $z = "Hello, World!";
echo "<h3>I :) to write $x, but I :( to write $y and $z</h3>";

$x = 10;
// Using global variable
function myTest() {
    // Declare the variable as global to access it else it produces an error
    global $x;
    
    echo "<h4>Global variable x is: $x</h4>";
}
myTest();
echo "<h4>Global variable x is: $x</h4>"; // This will output: Global variable x is: 10

// Using static variable
function myTest2() {
    static $x = 0; // Static variable retains its value between function calls
    $x++;
    
    echo "<h4>Static variable x is: $x</h4>";
}
myTest2(); // This will output: Static variable x is: 1
myTest2(); // This will output: Static variable x is: 2
myTest2(); // This will output: Static variable x is: 3


// Using local variable
function myTest3() {
    $x = 5; // Local variable
    echo "<h4>Local variable x is: $x</h4>";
}
myTest3(); // This will output: Local variable x is: 5

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <h1>Welcome to My PHP Application</h1>
    <p><?php echo "Connected to the database successfully!<br>
    my name is Nana Kwame and this is my first PHP application.<br>
    <br>"; ?></p>
</body>
</html>

