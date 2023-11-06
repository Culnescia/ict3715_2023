<?php
$title = "Parent Dashboard | Status";
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
<h3>View Application Status</h3>
<br/>
<div id="container">
</thead>
<tbody>
<?php 
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

// Define your SQL query to select all columns from the "application" table
$sql = "SELECT * FROM application";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Query failed: " . $conn->error);
}

// Fetch and display the data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // You can access the columns by their names
        echo "Application ID: " . $row["applicationID"] . 
        ", Application Status: <b>" . $row["applicationStatus"]. "</b>" . 
        ", Learner ID: " . $row["learnerID"] . "<br>";
    }
} else {
    echo "No results found.";
}

// Close the database connection
$conn->close();
?>
</tbody>
</table>
</div>

</div>
<div class="clearfix"></div>
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