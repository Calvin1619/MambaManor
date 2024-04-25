<?php
session_start();

if (isset($_SESSION['username'])) {
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

    // Retrieve username from session
    $username = $_SESSION['username'];
    $getUserIDSql = "SELECT id FROM user WHERE username = ?";
    
    // Prepare and bind
    $stmt = $conn->prepare($getUserIDSql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $userIDResult = $stmt->get_result();

    if ($userIDResult->num_rows > 0) {
        $row = $userIDResult->fetch_assoc();
        $user_id = $row['id']; // Assigning user ID here

        // Retrieve property name from the form
        $propertyName = $_POST['property_name'];

        switch($propertyName){
            case 'phineas':
                $propertyName='Phineas';
                break;
            case 'simpsons':
                $propertyName='Simpsons';
                break;
            case 'spongebob':
                $propertyName='Spongebob';
                break;
            case 'familyguy':
                $propertyName='FamilyGuy';
                break;
            case 'gravityfall':
                $propertyName='Gravity Falls';
                break;
            case 'teentitans':
                $propertyName='Teen Titans';
                break;
        }

        // Get property ID from database
        $sql = "SELECT id FROM properties WHERE name = ?";
        
        // Prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $propertyName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $propertyId = $row['id'];

            // Add property to wishlist
            $insertSql = "INSERT INTO wishlist (user_id, property_id) VALUES (?, ?)";
            
            // Prepare and bind
            $stmt = $conn->prepare($insertSql);
            $stmt->bind_param("ii", $user_id, $propertyId);
            if ($stmt->execute()) {
                echo "Property added to wishlist successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Property not found.";
        }
    } else {
        echo "User ID not found.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "User not logged in.";
}
?>


