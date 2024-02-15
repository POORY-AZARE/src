<?php include 'header.php'; ?>

<?php
include 'pz.php'; 

// SQL query to retrieve data from the 'reservations' table
$sql = "SELECT * FROM reservations";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Reservation Date</th>
                    <th>Reservation Time</th>
                    <th>Guests Number</th>
                    <th>Special Requests</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in table rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone_number']}</td>
                <td>{$row['reservation_date']}</td>
                <td>{$row['reservation_time']}</td>
                <td>{$row['guests_number']}</td>
                <td>{$row['special_requests']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results found.";
}

// Close the database connection when done
$conn->close();
?>

<?php include 'footer.php'; ?>
