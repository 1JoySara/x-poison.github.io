<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $conn = new mysqli('localhost', 'root', 'abdul', 'school');
    if ($conn->connect_error) {
        die('Connection Failed!!' . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM people WHERE phone = ? AND email = ?");
    $stmt->bind_param("ss", $phone, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $stmt = $conn->prepare("DELETE FROM people WHERE phone = ? AND email = ?");
        $stmt->bind_param("ss", $phone, $email);
        $stmt->execute();
        
        echo "User data deleted successfully! Please <a href='register.html'>register again</a>.";
    } else {
        echo "No matching record found for the provided email and phone number.";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: reset_pass.html");
    exit();
}
?>
