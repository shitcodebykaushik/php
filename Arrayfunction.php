<?php
// Original array
$a = array("red", "green", "blue");

// Remove the last element from the array
array_pop($a);
print_r($a); // Output: Array ( [0] => red [1] => green )

// Another array
$b = array("red", "green");

// Add elements to the end of array $a
array_push($a, "blue", "yellow");
print_r($a); // Output: Array ( [0] => red [1] => green [2] => blue [3] => yellow )

// Print array $b (unchanged)
print_r($b); // Output: Array ( [0] => red [1] => green )

// Search for the key of the value "red" in array $a
echo array_search("red", $a); // Output: 0

// Slice array $a from index 2
print_r(array_slice($a, 2)); // Output: Array ( [0] => blue [1] => yellow )

// Splice arrays 
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("a" => "purple", "b" => "orange");

// Replace the first two elements of $a1 with $a2
array_splice($a1, 0, 2, $a2);
print_r($a1); // Output: Array ( [a] => purple [b] => orange [c] => blue [d] => yellow )

// Sort an associative array in descending order according to the value
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
arsort($age);
print_r($age); // Output: Array ( [Joe] => 43 [Ben] => 37 [Peter] => 35 )

// Sort an array in descending order
$cars = array("Volvo", "BM", "Toyota");
rsort($cars);
print_r($cars); // Output: Array ( [0] => Volvo [1] => Toyota [2] => BMW )

// Calculate the sum of an array
$r = array(4, 5, 78);
echo array_sum($r); // Output: 87
?>