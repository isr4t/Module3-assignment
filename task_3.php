<?php
// Function to sort an array in descending order
function sortGradesDescending($arr) {
    // Use the rsort function to sort the array in descending order
    rsort($arr);
    return $arr;
}

// Creating an array of grades
$grades = array(85, 92, 78, 88, 95);


$sortedGrades = sortGradesDescending($grades);


print_r($sortedGrades);
?>
