<?php
// Start the session
session_start();
include('../include/conn_db.php');

// Validating Session
if(strlen($_SESSION['email'])==0){
header('location:../login_parent.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>OBRS | <?php echo $title;?></title>
<link rel="shortcut icon" type="image/ico" href="../img/favicon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- css -->
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen" type='text/css' />
<link href="../css/style.css" rel="stylesheet" media="screen" type='text/css' />
<link href="../color/default.css" rel="stylesheet" media="screen" type='text/css' />
<link href="../color/animate.css" rel="stylesheet" media="screen" type='text/css' />
<link href="../color/dlmenu.css" rel="stylesheet" media="screen" type='text/css' />
<script src="../js/modernizr.custom.js"></script>
<script src="../js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
</head>

<body>
<div class="menu-area">
<div id="dl-menu" class="dl-menuwrapper">
<button class="dl-trigger">Open Menu</button>
<ul class="dl-menu">
<li><a accesskey='1' href="index.php">Dashboard</a></li>
<li><a accesskey='2' href="reg_child.php">Register Child</a></li>
<li><a accesskey='3' href="caln.php">Calendar View</a></li>
<li><a accesskey='4' href="vi_status.php">Check Status</a></li>
<li><a accesskey='5' href="can_appl.php">Cancel Application</a></li>
<li>
<a href="#">Sub Menu</a>
<ul class="dl-submenu">
<li><a accesskey='6' href="prf.php">Profile</a></li>
<li><a accesskey='l' href="logout.php">Logout</a></li>
</ul>
</li>
</ul>
</div>
<!-- /dl-menuwrapper -->
</div>

<img src='../img/logo.png' class='img-responsive' width='100%' height="100px"/>