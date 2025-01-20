<?php

require_once 'connect.php';
require_once 'header.php';

?>
<div class="container">
    <?php

    if (isset($_POST['addnew'])) {
        // Validate input
        if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['address']) || empty($_POST['contact'])) {
            echo "<div class='alert alert-warning'>Please fill out all required fields</div>";
        } else {
            // Prepare and bind
            $stmt = $con->prepare("INSERT INTO users (firstname, lastname, address, contact) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $firstname, $lastname, $address, $contact);

            // Set parameters and execute
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];

            if ($stmt->execute()) {
                echo "<div class='alert alert-success'>Successfully added new user</div>";
            } else {
                echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
            }

            // Close statement
            $stmt->close();
        }
    }
    ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" required><br>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" required><br>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea rows="4" id="address" name="address" class="form-control" required></textarea><br>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="text" id="contact" name="contact" class="form-control" required><br>
                    </div>
                    <input type="submit" name="addnew" class="btn btn-success" value="Add New">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
// Close the database connection
$con->close();
?>