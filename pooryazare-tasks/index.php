<?php include 'header.php'; ?>

<h2>Table Reservation:</h2>
<form name="tableReservationForm" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="FirstName">First Name:</label>
                <input type="text" class="form-control" id="FirstName" placeholder="Enter your first name" name="FirstName" required minlength="2" maxlength="50">
                <span id="firstNameError"></span>
            </div>
            <div class="col">
                <label for="LastName">Last Name:</label>
                <input type="text" class="form-control" id="LastName" placeholder="Enter your last name" name="LastName" required minlength="2" maxlength="50">
                <span id="lastNameError"></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="Email">Email:</label>
        <input type="email" class="form-control" id="Email" placeholder="Enter your email" name="Email" required>
        <span id="emailError"></span>
    </div>
    <div class="form-group">
        <label for="PhoneNumber">Phone Number:</label>
        <input type="tel" class="form-control" id="PhoneNumber" placeholder="Enter your phone number" name="PhoneNumber" required pattern="^\+?\d{0,13}">
        <span id="phoneError"></span>
    </div>
    <div class="form-group">
        <label for="ReservationDate">Reservation Date:</label>
        <input type="date" class="form-control" id="ReservationDate" name="ReservationDate" required>
    </div>
    <div class="form-group">
        <label for="ReservationTime">Reservation Time:</label>
        <input type="time" class="form-control" id="ReservationTime" name="ReservationTime" required>
    </div>
    <div class="form-group">
        <label for="GuestsNumber">Number of Guests:</label>
        <input type="number" class="form-control" id="GuestsNumber" placeholder="Enter the number of guests" name="GuestsNumber" required min="1">
        <span id="guestsNumberError"></span>
    </div>
    <div class="form-group">
        <label for="SpecialRequests">Special Requests:</label>
        <textarea class="form-control" id="SpecialRequests" placeholder="Enter any special requests" name="SpecialRequests"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submitReservation">Submit</button>
</form>

<script>
function validateFirstName() {
    const firstName = document.getElementById("FirstName").value;
    const firstNameError = document.getElementById("firstNameError");
    if (firstName.length < 2 || firstName.length > 50) {
        firstNameError.innerHTML = "First Name must be between 2 & 50 characters";
        return false;
    } else {
        firstNameError.innerHTML = "";
        return true;
    }
}

function validateLastName() {
    const lastName = document.getElementById("LastName").value;
    const lastNameError = document.getElementById("lastNameError");
    if (lastName.length < 2 || lastName.length > 50) {
        lastNameError.innerHTML = "Last Name must be between 2 & 50 characters";
        return false;
    } else {
        lastNameError.innerHTML = "";
        return true;
    }
}

function validateEmail() {
    const email = document.getElementById("Email").value;
    const emailError = document.getElementById("emailError");
    if (!email.includes("@")) {
        emailError.innerHTML = "Please enter a valid email address";
        return false;
    } else {
        emailError.innerHTML = "";
        return true;
    }
}

function validatePhoneNumber() {
    const phoneNumber = document.getElementById("PhoneNumber").value;
    const phoneError = document.getElementById("phoneError");
    if (!phoneNumber.match(/^\+?\d{0,13}$/)) {
        phoneError.innerHTML = "Please enter a valid phone number";
        return false;
    } else {
        phoneError.innerHTML = "";
        return true;
    }
}

document.getElementById("FirstName").addEventListener("input", validateFirstName);
document.getElementById("LastName").addEventListener("input", validateLastName);
document.getElementById("Email").addEventListener("input", validateEmail);
document.getElementById("PhoneNumber").addEventListener("input", validatePhoneNumber);
</script>

<?php include 'footer.php'; ?>
