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

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Handle the case where the user is not logged in
} else {
    $userId = $_SESSION['user_id']; // Correct session variable for user ID

    // Fetch wishlist items for the logged-in user
    $stmt = $conn->prepare("SELECT * FROM wishlist WHERE user_id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $wishlist_items = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // You can process the wishlist items here as per your requirement
            $wishlist_items[] = $row;
        }
    }
    // You can return or process $wishlist_items as needed
}

$conn->close();
?>

