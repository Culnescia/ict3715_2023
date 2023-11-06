<?php
$title = "MIS Report 1";
include('header.php');
?>

<script>
const dataSource = {
chart: {
caption: "Total Learner's Registered per Grade",
subcaption: "(With Bus Routes)",
numbersuffix: " Students",
yaxisname: "No of registered (students)",
theme: "gammel",
plottooltext: "No of $label in $seriesName is <b>$dataValue</b>"
},
categories: [
{
category: [
{
label: "Bus Route 1"
},
{
label: "Bus Route 2"
},
{
label: "Bus Route 3"
}
]
}
],
dataset: [
{
seriesname: "Grade 8 & 9",
data: [
{
value: "91",
errorvalue: "81"
},
{
value: "111",
errorvalue: "100"
},
{
value: "91",
errorvalue: "81"
},
{
value: "91",
errorvalue: "81"
}
]
},
{
seriesname: "Grade 10 & 11",
data: [
{
value: "116",
errorvalue: "81"
},
{
value: "111",
errorvalue: "100"
},
{
value: "91",
errorvalue: "81"
},
{
value: "80",
errorvalue: "81"
}
]
},
{
seriesname: "Grade 12",
data: [
{
value: "119",
errorvalue: "102"
},
{
value: "103",
errorvalue: "90"
},
{
value: "110",
errorvalue: "97"
},
{
value: "116",
errorvalue: "90"
}
]
}
]
};

FusionCharts.ready(function() {
var myChart = new FusionCharts({
type: "errorbar2d",
renderAt: "chart-container",
width: "100%",
height: '700',
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
<h1>MIS Report 1</h1>
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