<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="icon" href="./images/white-logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/preview.css" rel="stylesheet">
</head>
<body>

<div class="table-container"> 
    <table>
        <tr>
        <th><img src="" alt="image"></th>
        <th>
    <form method="post" action="signup_process.php">
        <p>Email: <input type="text" name="email" required></p>
        <p>Password: <input type="password" name="password" required></p>
        <p><input type="submit" name="signup" value="Signup"></p>
    </form>
    <p>Already have an account? <a href="Loginpage.php">Login</a></p>
        </th>
        </tr>
    </table>
</div>
    
</body>
</html>