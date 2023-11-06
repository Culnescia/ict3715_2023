<?php
$title = "MIS Report 3";
include('header.php');
?>


<script type="text/javascript">
const dataSource = {
chart: {
caption: "Total Registered Learners",
subcaption: "Grades = Learners",
enablesmartlabels: "1",
showlabels: "1",
numbersuffix: " Learners",
usedataplotcolorforlabels: "1",
plottooltext: "$label, <b>$value</b> Learners",
theme: "gammel"
},
data: [
{
label: "Grade 8",
value: "290"
},
{
label: "Grade 9",
value: "260"
},
{
label: "Grade 10",
value: "180"
},
{
label: "Grade 11",
value: "140"
},
{
label: "Grade 12",
value: "115"
}
]
};

FusionCharts.ready(function() {
var myChart = new FusionCharts({
type: "doughnut3d",
renderAt: "chart-container",
width: "100%",
height: '500',
dataFormat: "json",
dataSource
}).render();
});
</script>

<!-- intro area -->
<div id="intro">
<br><br><br>
<br><br>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="brand">
<div class="text-center" style="color: black;">
<h1>MIS Report 3</h1>
<div id="printSection" >
<div id='chart-container'>
My Chart will show up here!!!
</div>
<p><br><br><br>
<input class="btn btn-default btn-lg" type='button' value='Print Data' onclick="PrintDoc();"/>
<input class="btn btn-default btn-lg" type='button' value='Print Preview' onclick="PrintPreview();"/></p>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include('footer.php');?>