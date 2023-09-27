<?php
// Function to calculate and print average grades for each student
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        // Calculate the average grade for each student
        $averageGrade = array_sum($grades) / count($grades);

       
        echo "Average grade for $student: $averageGrade\n";
    }
}

// Creating a multidimensional array to store student grades
$studentGrades = array(
    "Student 1" => array("Math" => 85, "English" => 90, "Science" => 75),
    "Student 2" => array("Math" => 90, "English" => 78, "Science" => 95),
    "Student 3" => array("Math" => 75, "English" => 80, "Science" => 82),
);


calculateAverageGrades($studentGrades);
?>
