<?php
if (isset($_POST['submitReservation'])) {
    // Retrieve data from the form and store it in variables
    $FirstName = $_POST['FirstName'];     
    $LastName = $_POST['LastName'];     
    $Email = $_POST['Email'];       
    $PhoneNumber = $_POST['PhoneNumber']; 
    $ReservationDate = $_POST['ReservationDate'];
    $ReservationTime = $_POST['ReservationTime'];
    $GuestsNumber = $_POST['GuestsNumber'];
    $SpecialRequests = $_POST['SpecialRequests']; 

    // Include the database connection file
    include 'pz.php'; 

    // Define a prepared SQL query to insert data into the 'reservations' table
    $sql = "INSERT INTO reservations (first_name, last_name, email, phone_number, reservation_date, reservation_time, guests_number, special_requests)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // the SQL statement to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        // The 'i' parameter type should be used for integers (like guests_number)
        $stmt->bind_param("ssssssis", $FirstName, $LastName, $Email, $PhoneNumber, $ReservationDate, $ReservationTime, $GuestsNumber, $SpecialRequests);

        // Execute the statement and check if it was successful
        if ($stmt->execute()) {
            echo "New reservation added successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing the statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
