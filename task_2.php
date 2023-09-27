<?php
// Function to remove even numbers from an array
function removeEvenNumbers($arr) {
    $result = array();
    foreach ($arr as $number) {
        if ($number % 2 != 0) {
            // Add odd numbers to the result array
            $result[] = $number;
        }
    }
    return $result;
}

$numbers = range(1, 10);

// Call the function to remove even numbers
$filteredNumbers = removeEvenNumbers($numbers);


print_r($filteredNumbers);
?>
