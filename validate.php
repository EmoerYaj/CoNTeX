<?php 


// CSV file path
$csvFile = "users.csv";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Read the CSV file
    $users = [];
    if (($handle = fopen($csvFile, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $users[$data[0]] = $data[1]; 
        }
        fclose($handle);
    }

    if (isset($users[$email]) && $users[$email] === $password) {
        // Successful login
        if (isset($_POST['remember'])) {
            setcookie('email', $email, time() + 60 * 60 * 7); 
        }
        session_start();
        $_SESSION['email'] = $email;
        header("location:editor.php"); 
    } else {
        echo "Email or Password is invalid. <br> Click Here <a href='Loginpage.php'>to try again</a>";
    }
} else {
    header("location:Loginpage.php"); 
}

?>