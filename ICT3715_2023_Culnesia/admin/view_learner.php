<?php 
$title = "View Learner";
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
<h1>View Learner</h1>
<h3>View Learner Information</h3>
<!--code here-->
<div id="printSection">
<p><?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='active'>
<td>Learner ID</td>
<td>Full Name</td>
<td>Learner Phone</td>
<td>Grade Previous</td>
<td>Grade Current</td>
<td>Parent ID</td>
<td>Parent Phone</td>
</tr>";
//start SQL query
$stmt = $conn->prepare("SELECT `learnerID`, `fullname`, `lrn_phone_no`, `gradePrev`, `gradeCurr`, `parPhoneNo`, `parentID` 
FROM `learnerinfo`
ORDER BY fullname");
$stmt->execute();
$learners = $stmt->fetchAll();
//end SQL query
//start while loop to get information from the table
foreach($learners as $learner){
?>
<tr class='danger'><td>
<?php echo $learner['learnerID']; ?>
</td>
<td>
<?php echo $learner['fullname']; ?>
</td>
<td>
<?php echo $learner['lrn_phone_no']; ?>
</td>
<td>
<?php echo $learner['gradePrev']; ?>
</td>
<td>
<?php echo $learner['gradeCurr']; ?>
</td>
<td>
<?php echo $learner['parentID']; ?>
</td>
<td>
<?php echo $learner['parPhoneNo']; ?>
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