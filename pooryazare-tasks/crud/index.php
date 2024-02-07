<?php include '../header.php'; ?>
<h2>Book Your Test Drive:</h2>
<form name="testDriveForm" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="FirstName">First Name:</label>
                <input type="text" class="form-control" id="FirstName" placeholder="Enter your first name" name="FirstName" required>
            </div>
            <div class="col">
                <label for="LastName">Last Name:</label>
                <input type="text" class="form-control" id="LastName" placeholder="Enter your last name" name="LastName" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="Email">Email:</label>
        <input type="Email" class="form-control" id="Email" placeholder="Enter your email" name="Email" required>
    </div>
    <div class="form-group">
        <label for="PhoneNumber">Phone Number:</label>
        <input type="tel" class="form-control" id="PhoneNumber" placeholder="Enter your phone number" name="PhoneNumber" required>
    </div>
    <div class="form-group">
        <label for="VehicleModel">Vehicle Model:</label>
        <select class="form-control" id="VehicleModel" name="VehicleModel">
            <option value="Model1">THE MERCEDES MAYBACH</option>
            <option value="Model2">BMW iX M60</option>
            <option value="Model3">BMW i4 M50
ELECTRIC</option>
            <option value="Model4">Tesla Cybertruck</option>
            <option value="Others">lamborghini Revuelto</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Date">Test Drive Date:</label>
        <input type="date" class="form-control" id="Date" name="Date" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submitTestDrive">Submit</button>
</form>
<?php include '../footer.php'; ?>