<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $animalType = $_POST["animal"];
    $breed = $_POST["breed"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $nicePet = $_POST["nice_pet"];

    // Read available pet information from text file
    $file = file_get_contents('availablePetInfo.txt');
    $availablePets = json_decode($file, true);

    // Filter available pet records based on form criteria
    $matchedPets = array_filter($availablePets, function ($pet) use ($animalType, $breed, $age, $gender, $nicePet) {
        $isMatched = true;
        if (!empty($animalType) && $pet['animal_type'] != $animalType) {
            $isMatched = false;
        }
        if (!empty($breed) && $pet['breed'] != $breed) {
            $isMatched = false;
        }
        if (!empty($age) && $pet['age'] != $age) {
            $isMatched = false;
        }
        if (!empty($gender) && $pet['gender'] != $gender) {
            $isMatched = false;
        }
        if (!empty($nicePet) && $pet['nice_pet'] != $nicePet) {
            $isMatched = false;
        }
        return $isMatched;
    });

    // Display matched pet records
    if (!empty($matchedPets)) {
        echo "<h2>Matched Pets:</h2>";
        foreach ($matchedPets as $pet) {
            echo "Animal Type: " . $pet["animal_type"] . "<br>";
            echo "Breed: " . $pet["breed"] . "<br>";
            echo "Age: " . $pet["age"] . "<br>";
            echo "Gender: " . $pet["gender"] . "<br>";
            echo "Nice Pet: " . $pet["nice_pet"] . "<br><br>";
        }
    } else {
        echo "No matched pets found.";
    }
}
?>