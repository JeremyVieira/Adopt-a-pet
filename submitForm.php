<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $animal = $_POST["animal"];
        $breed = $_POST["breedGiveAway"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $niceness = $_POST["niceness"];
        $kids = $_POST["kids"];
        $about = $_POST["about"];
        $name = $_POST["name"];
        $email = $_POST["email"];

        // Create pet record string
        $petRecord = $name . ":" . $animal . ":" . $breed . ":" . $age . ":" . $gender . ":" . $niceness . ":" . $kids . ":" . $about . ":" . $email;

        // Open the pet information file in append mode
        $file = fopen("availablePetInfo.txt", "a");

        // Write the pet record to the file
        fwrite($file, $petRecord . "\n");

        // Close the file
        fclose($file);
    }
?>