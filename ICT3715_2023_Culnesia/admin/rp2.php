<?php 
$title = "Report 2";
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
<h1>Weekly Report 2</h1>
<h3>Learners Bus Schedule</h3>
<!--code here-->
<div id="printSection">
<p><?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='active'>
<td>Bus Route ID</td>
<td>Bus Number</td>
<td>Pickup Number</td>
<td>Pickup Name</td>
<td>Pickup Time</td>
<td>Dropoff Number</td>
<td>Dropoff Name</td>
<td>Dropoff Time</td>
</tr>";
//start SQL query
$stmt = $conn->prepare("SELECT * FROM `busroute` ");
$stmt->execute();
$busroutes = $stmt->fetchAll();
//end SQL query
//start while loop to get information from the table
foreach($busroutes as $busroute){
?>
<tr class='danger'><td>
<?php echo $busroute['BusRouteID']; ?>
</td>
<td>
<?php echo $busroute['Busnumber']; ?>
</td>
<td>
<?php echo $busroute['pickup_num']; ?>
</td>
<td>
<?php echo $busroute['pickup_name']; ?>
</td>
<td>
<?php echo $busroute['pickup_time']; ?>
</td>
<td>
<?php echo $busroute['dropoff_num']; ?>
</td>
<td>
<?php echo $busroute['dropoff_name']; ?>
</td>
<td>
<?php echo $busroute['dropoff_time']; ?>
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