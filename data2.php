<?php
session_start();

$servername = "localhost";
$username = "mclaros1";
$password = "mclaros1";
$dbname = "mclaros1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['login-username']) && isset($_POST['login-password'])){
        // Retrieve form data
        $username = $_POST['login-username'];
        $password = $_POST['login-password'];

        // Check if the username exists
        $check_user_sql = "SELECT * FROM user WHERE username='$username'";
        $check_user_result = $conn->query($check_user_sql);
        if ($check_user_result->num_rows == 1) {
            $row = $check_user_result->fetch_assoc();
            // Verify password
            $hashed_password_db = trim($row['password']);
            if(password_verify($password, $row['password'])){
                $_SESSION['username'] = $username; // Store username in session for later use
                header("Location: mainpage.php");
                exit();
            } else {
                echo "Error: Incorrect password.";
                exit();
            }
        } else {
            echo "Error: Username not found.";
            exit();
        }
    } else {
        echo "Error: All fields are required.";
        exit();
    }
}

$conn->close();
?>
