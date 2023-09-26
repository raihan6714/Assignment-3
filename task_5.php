<?php
function generatePassword($length) {
    // Define the character set including lowercase letters, uppercase letters, numbers, and special characters
    $charSet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';

    // Shuffle the character set to randomize it
    $shuffledCharSet = str_shuffle($charSet);

    // Get the first $length characters from the shuffled set to form the password
    return substr($shuffledCharSet, 0, $length);
}

// Generate a password with a length of 12 characters
$generatedPassword = generatePassword(12);

// Print the generated password
echo "Generated Password: " . $generatedPassword;
