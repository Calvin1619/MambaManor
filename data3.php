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

// Check if search term is set
if(isset($_GET['search_term'])) {
    $search_term = $_GET['search_term'];
    // Prepare a SQL statement to fetch properties based on search term
    $sql = "SELECT * FROM properties WHERE name LIKE '%$search_term%' OR address LIKE '%$search_term%' OR price LIKE '%$search_term%' OR sqft LIKE '%$search_term%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            // Output each property as JSON
            echo json_encode($row);
        }
    } else {
        echo "No results found";
    }
}
?>