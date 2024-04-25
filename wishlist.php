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

// Include header
include 'top2.php';

// Retrieve username from session
$username = $_SESSION['username'];

// SQL query to select data from wishlist table with property information for the current user
$sql = "SELECT wishlist.id, wishlist.user_id, wishlist.property_id, properties.name, properties.price, properties.address, properties.beds, properties.baths, properties.sqft
        FROM wishlist
        INNER JOIN properties ON wishlist.property_id = properties.id
        WHERE wishlist.user_id = (
            SELECT id FROM user WHERE username = ?
        )";
        
// Prepare and bind
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>User ID</th><th>Property ID</th><th>Name</th><th>Price</th><th>Address</th><th>Beds</th><th>Baths</th><th>Sqft</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["property_id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["beds"] . "</td>";
        echo "<td>" . $row["baths"] . "</td>";
        echo "<td>" . $row["sqft"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Include footer
include 'bottom.php';

// Close statement and connection
$stmt->close();
$conn->close();
?>



