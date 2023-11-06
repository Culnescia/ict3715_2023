<?php 
$title = "Report 1";
include("header.php"); 
?>

<!--code here-->
<div id="intro">
<br><br><br>
<br><br>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="brand">
<div class="box">
<div class="text-center" style="color: black;">
<h1>Daily Report 1</h1>
<h3>Learners on Waiting List</h3>
<!--code here-->
<div id="printSection" >
<p><?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='active'>
<td>Application ID</td>
<td>Application Status</td>
<td>Learner ID</td>
<td>Learner Full Name</td>
<td>Parent Phone No</td>
<td>Learner's Phone No</td>
</tr>";
//start SQL query
$stmt = $conn->prepare("SELECT applicationID, applicationStatus, application.learnerID,
fullname, parPhoneNo, lrn_phone_no 
FROM application, learnerinfo 
WHERE application.learnerID = learnerinfo.learnerID
AND applicationStatus = 'Parent Application'
ORDER BY fullname");
$stmt->execute();
$waitinglists = $stmt->fetchAll();
//end SQL query
//start while loop to get information from the table
foreach($waitinglists as $waitinglist){
?>
<tr class='danger'><td>
<?php echo $waitinglist['applicationID']; ?>
</td>
<td>
<?php echo $waitinglist['applicationStatus']; ?>
</td>
<td>
<?php echo $waitinglist['learnerID']; ?>
</td>
<td>
<?php echo $waitinglist['fullname']; ?>
</td>
<td>
<?php echo $waitinglist['parPhoneNo']; ?>
</td>
<td>
<?php echo $waitinglist['lrn_phone_no']; ?>
</td>
<?php
}
?>
</tbody>
</table>    
<!--end display table-->  
</p>
</div>
<p><input class="btn btn-default btn-lg" type='button' value='Print Data' onclick="PrintDoc();"/>
<input class="btn btn-default btn-lg" type='button' value='Print Preview' onclick="PrintPreview();"/></p>
</div>
</div>	
<br>
</div>			
</div>
</div>
</div>
</div>
</div>

<?php include("footer.php"); ?>