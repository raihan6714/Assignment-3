<?php
function sortGradesDescending($grades) {
    // Sort the array in descending order
    rsort($grades);

    // Print the sorted grades
    print_r($grades);
}

// Define the array containing the grades
$grades = array(85, 92, 78, 88, 95);

// Call the function with the array
sortGradesDescending($grades);
