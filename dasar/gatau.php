<?php

$student = [
    ["Student1", "1234567890", "Science", "student1@gmail.com"],
    ["Student2", "0987654321", "Math", "student2@gmail.com"],
    ["Student3", "1029384756", "History", "student3@gmail.com"]
];

// Call Student3 Email
echo $student[2][3];

?>





<!-- <?php

$month = ["January", "February", "March"];

// Call array
echo $month[0];
echo "<br";

// Add array
$month[] = "April";
var_dump($month)

?> -->





<!-- <?php

$x = 25;

if ($x < 10) {
    echo "true";
} elseif ($x == 20) {
    echo "right";
} else {
    echo "false";
}

?> -->





<!-- <?php

$colors = array("red", "yellow", "green", "blue"); 

foreach ($colors as $value) {
  echo "$value <br>";
}

?> -->





<!-- <?php

// Defining a PHP function
function message(){
    echo "Have a nice day!";
}

// Calling a PHP function
message();
echo "<p>";

?> -->





<!-- <?php

// and -> And
// or -> Or
// xor -> Xor
// && -> And
// || -> Or
// ! -> Not

$x = 20;

var_dump($x < 10 || $x % 2 == 0);
echo "<p>";

?> -->





<!-- <?php

// == -> Equal
// === -> Identical
// != -> Not equal
// <> -> Not equal
// !== -> Not identical
// > -> Greater than
// < -> Less than
// >= -> Greater than or equal to
// <= -> Less than or equal to
// <=> -> Spaceship

// The var_dump() function dumps information about one or more variables
// The information holds type and value of the variable(s)

var_dump(1 == "1");
echo "<p>";

?> -->





<!-- <?php

$x = 10;
$y = 5;

// + -> Addition
echo $x+$y;
echo "<br>";

// - -> Substraction
echo $x-$y;
echo "<br>";

// * -> Multiplication
echo $x*$y;
echo "<br>";

// / -> Division
echo $x/$y;
echo "<br>";

// % -> Modulus
echo $x%$y;

?> -->





<!-- <?php

// = -> The left operand gets set to the value of the expression on the right
// += -> Addition
// -= -> Substraction
// *= -> Multiplication
// /= -> Division
// %= -> Modulus

$x = 10;
$x *= 5;
echo $x;

?> -->