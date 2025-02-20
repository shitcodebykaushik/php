<?php
function generatePattern($n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo chr(65 + $j); 
        }
        for ($j = $i - 1; $j >= 0; $j--) {
            echo chr(65 + $j);
        }
        echo "\n";
    }
}

$n = 5;

generatePattern($n);
$persons=array("John Doe => 25","Jane Doe => 30","Jim Doe => 35");


?>


