<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $yearofstudies = $_POST["yearofstudies"];

    $conn = new mysqli('localhost', 'root', 'abdul', 'school');
    if($conn->connect_error){
        die('Connection Failed!!'.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO people (firstName, lastName, phone, email, password, yearofstudies) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $firstname, $lastname, $phone, $email, $password, $yearofstudies);
        
        if ($stmt->execute()) {
            echo "Success!";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
        $conn->close();
    }
} else {
    echo "Invalid request!";
}
?>
