<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the entered username and password
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Validate the entered username and password
        if (validateUsername($username) && validatePassword($password)) {
            // Check if the username already exists
            if (!isUsernameExists($username)) {
                // Write the username and password to the login file
                writeLoginToFile($username, $password);
                // Return success message
                echo "Account successfully created. You can now login.";
            } else {
                // Return error message for duplicate username
                echo "Username is not available. Please choose a different username.";
            }
        } else {
            // Return error message for invalid username or password
            echo "Invalid username or password format.";
        }
    }

    // Function to validate username format
    function validateUsername($username) {
        return preg_match("/^[a-zA-Z0-9]+$/", $username);
    }

    // Function to validate password format
    function validatePassword($password) {
        return preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/", $password);
    }

    // Function to check if username already exists
    function isUsernameExists($username) {
        // Read the login file
        $loginData = file("login.txt", FILE_IGNORE_NEW_LINES);
        foreach ($loginData as $login) {
            $loginArr = explode(":", $login);
            if ($loginArr[0] == $username) {
                return true;
            }
        }
        return false;
    }

    // Function to write username and password to login file
    function writeLoginToFile($username, $password) {
        // Append the username and password to the login file
        $loginData = $username . ":" . $password . "\n";
        file_put_contents("login.txt", $loginData, FILE_APPEND);
    }
?>
