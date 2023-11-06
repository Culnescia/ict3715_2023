<?php 
$title = "View Parent";
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
<h1>View Parent</h1>
<h3>View Parent Information</h3>
<!--code here-->
<div id="printSection">
<p><?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='active'>
<td>Parent ID</td>
<td>Full Name</td>
<td>Phone</td>
<td>Email</td>
<td>Learner ID</td>
</tr>";
//start SQL query
$stmt = $conn->prepare("SELECT `ParentID`, `name`, `surname`, `phone_no`, `email`, `learnerID` 
FROM `parent` 
ORDER BY ParentID");
$stmt->execute();
$parents = $stmt->fetchAll();
//end SQL query
//start while loop to get information from the table
foreach($parents as $parent){
?>
<tr class='danger'><td>
<?php echo $parent['ParentID']; ?>
</td>
<td>
<?php echo $parent['name'] . " " . $parent['surname']; ?>
</td>
<td>
<?php echo $parent['phone_no']; ?>
</td>
<td>
<?php echo $parent['email']; ?>
</td>
<td>
<?php echo $parent['learnerID']; ?>
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