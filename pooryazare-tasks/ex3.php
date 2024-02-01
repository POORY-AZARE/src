<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php'; ?>

<h1>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname.
 Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag. Table & Form Guide</h1>

<form method = "post" action="wellcom.php">
    First name : <input type="text" name = "firstname" required> <br><br>
    Last name : <input type="text" name = "lastname" required> <br><br>
    <input type = "submit" value = "Submit">

</form>


<?php
include 'footer.php'; ?>