<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $totalGrades = 0;
        $numSubjects = count($grades);

        // Calculate the total grades for the student
        for ($i = 0; $i < $numSubjects; $i++) {
            $totalGrades += $grades[$i];
        }

        // Calculate the average grade for the student
        $averageGrade = $totalGrades / $numSubjects;

        // Print the average grade for the student
        echo "Average grade for $student: $averageGrade\n";
    }
}

// Define the multidimensional array containing student grades
$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 75, 'English' => 82, 'Science' => 88)
);

// Call the function with the array
calculateAverageGrades($studentGrades);
