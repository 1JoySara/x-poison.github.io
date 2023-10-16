<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $newPassword = generateRandomPassword(); // Function to generate a random password

    // TODO: Validate email and phone number (you can use regular expressions for validation)

    // TODO: Connect to your database
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // TODO: Check if the email and phone number exist in the database
    $sql = "SELECT * FROM users WHERE email='$email' AND phone_number='$phone'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, update the password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateSql = "UPDATE users SET password='$hashedPassword' WHERE email='$email' AND phone_number='$phone'";

        if ($conn->query($updateSql) === TRUE) {
            echo "Password reset successful. Your new password is: $newPassword";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "User not found. Password reset failed.";
    }

    $conn->close();
}

function generateRandomPassword($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomPassword = '';
    for ($i = 0; $i < $length; $i++) {
        $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomPassword;
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>

    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" required><br><br>

    <button type="submit">Reset Password</button>
</form>

</body>
</html>
