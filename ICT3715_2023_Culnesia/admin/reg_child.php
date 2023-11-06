<?php
$title = "Admin Dashboard | Register Child";
include('header.php');
?>

<!-- intro area -->
<div id="intro">
<br><br><br>
<br><br>
<div class="container">
<div class="row">
<div class="col-md-10">
<div class="brand">
<div class="text-center" style="font-size: 14pt; color: black;">
<div class="col-md-10">
<h3>Register Child</h3>
<div id="container">
<div class="card-body pt-5">
<h3>Registration Form</h3>
</div>
</div>
</div>
<br><br>
<br><br><br><br>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ict3715_2023_1";

    // Create a connection to the MySQL database
    $conn = new mysqli($servername, $username, $password, $database);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from the form
    $learner_id = "lrn" . rand(1, 200);
    $fullname = $_POST['fullname'];
    $currentBus = $_POST['currentBus'];
    $newBus = $_POST['newBus'];
    $parPhoneNo = $_POST['parPhoneNo'];
    $lrnPhoneNo = $_POST['lrnPhoneNo'];
    $parentID = $_POST['parentID'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO learnerinfo 
    (learnerID, parentID, fullname, current_bus, new_bus, parPhoneNo, lrn_phone_no) 
    VALUES 
    ('$learner_id', $parentID, '$fullname', '$currentBus', '$newBus', '$parPhoneNo', '$lrnPhoneNo')";

    // Get data from the form
    $applicationStatus = 'Parent Appllication';
    $applicationID = "appl" . rand(1, 200);

    // SQL query to insert data into the "application" table
    $sql1 = "INSERT INTO application 
    (applicationID, applicationStatus, learnerID) 
    VALUES 
    ('$applicationID', '$applicationStatus', '$learner_id')";


    if ($conn->query($sql) === TRUE) {
        if ($conn->query($sql1) === TRUE) {
            echo "Data inserted successfully";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<form method="post" enctype="multipart/form-data">
<fieldset>
<legend>Learner Information</legend>
<input type='text' class='form-control' placeholder='Parent ID' name='parentID' required /><br/>
<input type='text' class='form-control' placeholder='Learner Full Name' name='fullname' required /><br/>
<input type='text' class='form-control' placeholder='Current Bus' name='currentBus' required /><br/>
<input type='text' class='form-control' placeholder='New Bus' name='newBus' required /><br/>
<input type='text' class='form-control' placeholder='Parent Phone No' name='parPhoneNo' value="" required /><br/>
<input type='text' class='form-control' placeholder='Learner Phone No' name='lrnPhoneNo' /><br/>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
<button type="reset" name="Clear" class="btn btn-warning">Reset</button>
</fieldset>
</form>
</div>
<br><br/>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include('footer.php');
?>