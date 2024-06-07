<?php
    // Function to check if a number is prime
    function is_prime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Initialize an empty array to store user input
    $numbers = array();

    // Get input values from the form
    if (isset($_POST['numbers'])) {
        $input = $_POST['numbers'];
        // Convert the input string to an array
        $numbers = explode(",", $input);

        // Iterate over the array and check each number
        foreach ($numbers as $number) {
            $number = trim($number); // Trim any extra whitespace
            if (is_numeric($number)) {
                $number = (int)$number; // Convert to integer
                if (is_prime($number)) {
                    echo $number . " is a prime number.<br>";
                } else {
                    echo $number . " is not a prime number.<br>";
                }
            } else {
                echo $number . " is not a valid number.<br>";
            }
        }
    }
    ?>