<?php
// Sample array with different types of characters
$array = ['a', 'b', 'a', '1', '2', 'b', 'c', 'A', 'C', '1'];

// Initialize an empty associative array to store character counts
$characterCounts = [];

// Loop through the array and count the occurrences of each character
foreach ($array as $char) {
    // Convert the character to lowercase to treat uppercase and lowercase as the same character
    //$char = strtolower($char);

    if (array_key_exists($char, $characterCounts)) {
        // If the character exists in the array, increment its count
        $characterCounts[$char] = $characterCounts[$char] + 1;
    } else {
        // If the character doesn't exist in the array, add it with a count of 1
        $characterCounts[$char] = 1;
    }
}

// Count the number of unique characters
$uniqueCharacterCount = count($characterCounts);

// Display the results
echo "Unique Characters: $uniqueCharacterCount\n";
foreach ($characterCounts as $char => $count) {
    echo "$char: $count\n";
}

//array_key_exists()
?>
