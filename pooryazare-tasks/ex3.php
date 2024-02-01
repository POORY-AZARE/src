<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php'; ?>

<h4>2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname.
  Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag. Table & Form Guide</h4>
 <h4>3.  Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your head tag. BootStrap Guide </h4>

    <div class="container mt-5">
        <form method="post" action="wellcom.php">
            <!-- First Name Field -->
            <div class="form-group">
                <label for="firstname">First name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <!-- Last Name Field -->
            <div class="form-group">
                <label for="lastname">Last name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>

            <!-- Submit Button -->
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <h4>4. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it.
                Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h4>
                <?php
                  $g1 = 5 ;
                  $g2 = 4 ;
                  $g3 = 5 ;

                     ?>
                


                <div class="container mt-5">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>S.n.</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td><?php echo $g1 ?></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Alice</td>
                <td><?php echo $g2 ?></td>
            </tr>

            <tr>
                <td>3</td>
                <td>Bob</td>
                <td><?php echo $g3 ?></td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<h4>     5. String Variables: Write a PHP script with two string variables
     ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h4>

     <?php
    // Defining string variables
    $str1 = "Hello";
    $str2 = "World";

    // Concatenating the strings with a space in between
    $combinedStr = $str1 . " " . $str2;

    // Printing the combined string and its length
    echo $combinedStr . "<br>";
    echo "Length of the Combined String: " . strlen($combinedStr);
?>


</body>




<?php
include 'footer.php'; ?>