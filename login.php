<?php
// Get the username and password from the AJAX request
$username = $_POST["username"];
$password = $_POST["password"];

// Read the login.txt file
$loginFile = file_get_contents("login.txt");
$loginEntries = explode("\n", $loginFile);

// Loop through the login entries and check for a match
$loginMatch = false;
foreach ($loginEntries as $entry) {
    $entry = trim($entry);
    $entryParts = explode(":", $entry);
    if ($entryParts[0] === $username && $entryParts[1] === $password) {
        $loginMatch = true;
        break;
    }
}

// Return the appropriate response
if ($loginMatch) {
    echo "Login successful!";
    session_start();
} else {
    echo "Login failed.";
}
?>
