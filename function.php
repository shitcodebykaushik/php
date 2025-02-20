<?php
function printNameWithDateTime($name) {
 
    $currentDateTime = date('Y-m-d H:i:s');
    
    
    echo "Hello, $name! Current date and time is: $currentDateTime";
}


$name = "Lovely professional university ";
printNameWithDateTime($name);
$age = "17";
?>