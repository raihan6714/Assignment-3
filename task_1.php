<?php
function modifyText($inputText) {
    // Convert the string to lowercase
    $lowercaseText = strtolower($inputText);

    // Replace "brown" with "red" in the string
    $modifiedText = str_replace("brown", "red", $lowercaseText);

    // Print the modified text
    echo $modifiedText;
}

// Define the input text
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function with the input text
modifyText($text);
