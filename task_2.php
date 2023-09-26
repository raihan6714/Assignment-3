<?php
function removeEvenNumbers($numbers) {
    // Initialize an empty array to store the odd numbers
    $oddNumbers = array();

    // Loop through the original array and keep only odd numbers
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $oddNumbers[] = $number;
        }
    }

    // Print the resulting array
    print_r($oddNumbers);
}

// Define the array containing numbers 1 to 10
$numbers = range(1, 10);

// Call the function with the array
removeEvenNumbers($numbers);
