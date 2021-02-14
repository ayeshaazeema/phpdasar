<!-- Numeric Array -->

<?php

$month = ["January", "February", "March"];

// Call array
echo $month[0];
echo "<br>";

// Add array
$month[] = "April";
var_dump($month);
echo "<br>";

?>

<!-- Multidimensional Array -->

<?php

$student = [
    ["Student1", "1234567890", "Science", "student1@gmail.com"],
    ["Student2", "0987654321", "Math", "student2@gmail.com"],
    ["Student3", "1029384756", "History", "student3@gmail.com"]
];

// Call Student3 Email
echo $student[2][3];
echo "<br>";

?>

<!-- Assosiative Multidimensional Array -->

<?php

$children = [
    ["Name" => "Child1", 
    "ID" => "1234567890", 
    "Major" => "Science",
    "Email" => "child1@gmail.com"],

    ["Name" => "Child2", 
    "ID" => "0987654321",
    "Major" => "Math", 
    "Email" => "child2@gmail.com"],

    ["Name" => "Child3", 
    "ID" => "1029384756", 
    "Major" => "History", 
    "Email" => "child3@gmail.com"]
];

// Call Child1 Email
echo $children[0]["Email"];

?>


