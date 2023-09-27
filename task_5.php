<?php
// Function to generate a random password of the specified length
function generatePassword($length) {

    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    //combine all set of character
    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    // Initialize the password variable
    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Choosing a random character from the combined set
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
        
        // Append the random character to the password
        $password .= $randomChar;
    }

    return $password;
}

// Generating a password with a length of 12 characters
$password = generatePassword(12);


echo $password;
?>
