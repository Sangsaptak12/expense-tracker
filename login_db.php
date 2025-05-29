<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['uid'] ?? '';
    $password = $_POST['pwd'] ?? '';

    if (!empty($email) && !empty($password)) {
        // Prepare a statement to retrieve user information
        $stmt = $conn->prepare("SELECT Id, Username, Email, Password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email); // Bind parameters
        $stmt->execute();  // Execute the statement
        $result = $stmt->get_result(); // Store the result

        if ($result->num_rows == 1) 
        {
            // Fetch user details and Verifying the hashed password
            $row = $result->fetch_assoc();
            $hashed_password = $row['Password'];
            if (password_verify($password, $hashed_password)) {
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header("Location: dashboard1.php"); 
                exit();
            } 
            else {
                echo "Incorrect password";
            }
        } 
        else 
        {
            echo "User not found";
        }

        
        $stmt->close();
    }
    else {
        echo "Incomplete form data";
    }
}


?>

