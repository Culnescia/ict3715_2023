<?php
$title = "Parent Dashboard";
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
<div class="text-center" style="font-size: 16pt; color: white;">
Welcome <?php echo $_SESSION["name"] . " " . $_SESSION["surname"]; ?>
<br/><br/>
You role in the system is Parent
<br/><br/>
Here is a list of what you can do:<br/><br/>
1. Register Child <br/>
2. Check Child Status <br/>
3. Calendar View <br/>
4. Cancel Child Application<br/>
5. Many More...<br/>
<br/><br/>
<br>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include('footer.php');
?>