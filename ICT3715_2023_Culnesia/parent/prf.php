<?php
$title = "Parent Dashboard | Profile";
include('header.php');
?>

<!-- intro area -->
<div id="intro">
<br><br><br>
<br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="brand">
<div class="text-center" style="font-size: 14pt; color: white;">
<div class="col-md-10">
<h3>Parent Profile</h3>
<br/>
{Parent} Fullname: <?php echo $_SESSION["name"] . " " . $_SESSION["surname"]; ?><br/><br/>
Parent Number: <?php echo $_SESSION["ParentID"]; ?><br/><br/>
Parent Email: <?php echo $_SESSION["email"]; ?><br/><br/>
Parent Phone Number: <?php echo $_SESSION["phone_no"]; ?><br/><br/>

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