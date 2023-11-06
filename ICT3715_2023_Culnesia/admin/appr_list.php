<?php
$title = "Admin Dashboard | Approve";
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
<h3>Approve Application Status</h3>
<div id="container">
<div class="card-body pt-5">
<h3>Approval Form</h3>
</div>
</div>
</div>
<br><br>
<br><br><br><br>
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "ict3715_2023_1";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user input from a form or any other source
    $newValue = $_POST["applicationStatus"];;
    
    // Validate the input as needed
    
    // Define the SQL query to update a specific column in the table
    $sql = "UPDATE application 
    SET applicationStatus = ? 
    WHERE applicationID = ?";

    // Prepare and execute the query
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die("Query preparation failed: " . $conn->error);
    }
    
    $applicationID = $_POST["applicationID"]; // You need to specify the condition for the update
    
    $stmt->bind_param("ss", $newValue, $applicationID); // "ss" indicates two string parameters

    if ($stmt->execute() === false) {
        die("Query execution failed: " . $conn->error);
    }
    
    echo "Update successful!";
    
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<form method="post" enctype="multipart/form-data">
<fieldset>
<legend>Application Information</legend>
<input type='text' class='form-control' placeholder='Application ID' name='applicationID' required /><br/>
<input type='text' class='form-control' placeholder='Application Status' name='applicationStatus' required /><br/>
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