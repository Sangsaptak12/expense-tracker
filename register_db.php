<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uname'] ?? '';
    $email = $_POST['uid'] ?? '';
    $password = $_POST['pwd'] ?? '';

    if (!empty($username) && !empty($email) && !empty($password)) {
        // Hashing the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare a statement to avoiding sql injection
        $stmt = $conn->prepare("INSERT INTO users (Username, Email, Password) VALUES (?, ?, ?)");
        
        // Bind parameters
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        // Execute the statement
        if ($stmt->execute())
        {
            $message = "Registration successful!";
            echo "<script type='text/javascript'>alert('$message'); window.location='reg.php';</script>";

        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Incomplete form data";
    }
}
?>

