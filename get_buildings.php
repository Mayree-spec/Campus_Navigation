<?php
// Include the database connection
include 'db.php';

// Set header to JSON so the frontend knows what to expect
header('Content-Type: application/json');

// SQL query to select all buildings from your table
$sql = "SELECT * FROM campus_buildings";
$result = $conn->query($sql);

$buildings = array();

if ($result->num_rows > 0) {
    // Fetch each row and add it to our array
    while($row = $result->fetch_assoc()) {
        $buildings[] = $row;
    }
}

// Convert the PHP array into a JSON string and output it
echo json_encode($buildings);

// Close the database connection
$conn->close();
?>