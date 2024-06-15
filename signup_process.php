<?php

// CSV file path
$csvFile = "users.csv";

if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Read existing users from the CSV file
    $users = [];
    if (($handle = fopen($csvFile, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $users[$data[0]] = $data[1]; 
        }
        fclose($handle);
    }

    // Check if the email already exists
    if (isset($users[$email])) {
        echo "Email already exists. Please choose a different email.";
    } else {
        // Add the new user to the CSV file
        $handle = fopen($csvFile, "a"); // Open in append mode
        fwrite($handle, "\n"); // Add a newline character
        fputcsv($handle, [$email, $password]);
        fclose($handle);

        echo "Signup successful! You can now <a href='Loginpage.php'>login</a>.";
    }
} else {
    header("location:signup.php"); 
}

?>