<?php
include 'pz.php'; 

// SQL query to retrieve data from the 'TestDriveBookings' table
$sql = "SELECT * FROM TestDriveBookings";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>BookingID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Vehicle Model</th>
                    <th>Test Drive Date</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['BookingID']}</td>
                <td>{$row['FirstName']}</td>
                <td>{$row['LastName']}</td>
                <td>{$row['Email']}</td>
                <td>{$row['PhoneNumber']}</td>
                <td>{$row['VehicleModel']}</td>
                <td>{$row['Date']}</td>
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
