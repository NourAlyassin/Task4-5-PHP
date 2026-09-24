<?php

// 1.Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position

for ($i = 1; $i <= 10; $i++) {
    if ($i < 10) {
        echo $i . "-";
    } else {
        echo $i;
    }
}

//---------------------------------
// 2.Write a script to remove the duplicated numbers from this array then sort it Ascending
// 	$numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ] 
// Output :  [ 1 , 2 , 3 , 4 , 5 , 6 , 7 ]

$numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ] ;
$uniqueArr = [];

foreach ($numbers as $num) {
    if (!in_array($num, $uniqueArr)) {
        $uniqueArr[] = $num;
    }
}

echo "[" . implode(", ", $uniqueArr) . "]";

//----------------------------------
// 3.Write a program which will count the "r" characters in the text "eraasoft

$text = "Erasoft";
$letter = "r";

$count = substr_count(strtolower($text), strtolower($letter));

echo "The letter '$letter' appers $count";

//----------------------------------
// 4.Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz"

for ($i = 1; $i <= 50; $i++) {
    
    if ($i % 3 == 0 && $i % 5 == 0){

        echo "FizzBuzz \n";

    } else if ($i % 3 == 0){

        echo "Fizz \n";

    } else if ($i % 5 == 0){

        echo "Buzz \n";

    } else {
        
        echo $i. "\n";
    }
}

//---------------------------------
// 5.Create a script using a for loop to add all the integers between 0 and 30 and display the total 

$total = 0;

for ($i = 0; $i <= 30; $i++) {

    $total += $i;
}
echo "The sum of the numbers 0 to 30 is $total";

// --------------------------------
// 6.Create a function that takes an array of numbers. Return the Largest number in the array.
// $numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ]

function getLargestNumber($numbers) {

    return max($numbers);
}

$numbers = [5, 15, -10, 100, 250, 0, 1];
$largest = getLargestNumber($numbers);

echo "The largest number is: " . $largest;

//--------------------------------
// 7.Create a function that takes an array of numbers. Return the Smallest number in the array
// $numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ]

function getSmallestNumber($numbers) {

    return min($numbers);
}

$numbers = [5, 15, -10, 100, 250, 0, 1];
$largest = getSmallestNumber($numbers);

echo "The Smallest number is: " . $largest;

//------------------------------
// 8.Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number

$number = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "The factorial of $number is: $factorial";

//-------------------------------
// 9.Write a PHP program that prints the odd numbers from 1 to 15 using a while loop.

$number = 1;

while ($number <= 15) {
    if ($number % 2 != 0) {
        echo $number . "\n";
    }
    $number++;
}

//-------------------------------
// 10.Write a PHP program that prints the even numbers from 1 to 15 using a while loop.

$number = 1;

while ($number <= 15) {
    if ($number % 2 == 0) {
        echo $number . "\n";
    }
    $number++;
}

//------------------------------
// 11. Write a PHP program that prints the keys and values of an associative array using a foreach loop.

$person = ["name" => "John", "age" => 30, "city" => "New York"];

foreach ($person as $key => $value) {
    echo "Key: $key, Value: $value \n";
}

//------------------------------
// 12.Write a PHP program that calculates the sum of the values in an associative array using a foreach loop.

$sales = ["Jan" => 100, "Feb" => 200, "Mar" => 150];

foreach ($sales as $key => $value) {
    $total += $value;
}
echo "The total of the sales is: $total \n";

//------------------------------
// 13.Write a PHP program that prints the multiplication table of 8 using for loop.

$mult = 1;

for($i = 1; $i <=10; $i++) {
    $mult = $i * 8;
    echo "$i * 8 = $mult \n";
}

//-------------------------------
// 14.Write a PHP program that prints the elements of a multidimensional array using a nested foreach loop.

$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Mary", "age" => 22, "grade" => "B"),
    array("name" => "Tom",  "age" => 18, "grade" => "A")
);

foreach ($students as $student) {

    foreach ($student as $key => $value) {
        echo ($key) . ": " . $value . "\n";
    }
    echo "\n";
}

//------------------------------
// 15.Write a PHP program that prints all the numbers between 1 and 100 that are divisible by 3 using a do while loop.

$num = 1;

do {
    if ( $num % 3 == 0){
    echo "$num \n";
    } $num++;
} while ($num <= 100);

// Done!
?>