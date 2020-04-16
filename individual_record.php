
<?php
include 'database.php';
include 'indi.php'
?>

<html>

<head>

<style type="text/css">
*{
	margin:0px;
	padding:0px;
}
</style>

</head>

<body>

<div> 
<h1 style="background-color:blue"><a href='faculty.php?facid=<?php echo $_GET["facid"] ?>'><-</a> </h1>
</div>
	
	<div>
	<canvas id="chartcanvas" >
	</canvas>
	</div>

<script src="js/jquery.min.js"></script>
<script src="js/Chart.min.js"></script>

<script type="text/javascript">

 var data = <?php echo json_encode($data, JSON_HEX_TAG); ?>;
 var subject=<?php echo json_encode($_GET["subject"], JSON_HEX_TAG); ?>;
  var enrollment=<?php echo json_encode($_GET["enrollment"], JSON_HEX_TAG); ?>;
 console.log(data);

$(document).ready(function() {


			console.log(data[0].length);
			console.log(data[1].length);

var totaltaken=data[0].length;


var totalgiven=data[1].length;

			var data1 = {
		labels : ["jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec"],
		datasets : [
			{
				label : "Attendence",
				data : [data[0][0].cn,data[1][0].cn,data[2][0].cn,data[3][0].cn,data[4][0].cn,data[5][0].cn,data[6][0].cn,data[7][0].cn,data[8][0].cn,data[9][0].cn,data[10][0].cn,data[11][0].cn],
		  backgroundColor : "green",
            borderColor : "lightgreen",
        fill: false,
        lineTension: 0,
        radius: 5
			}
		]
	};
	var options = {
		title : {
			display : true,
			position : "top",
			text : subject+" Attentence of "+enrollment,
			fontSize : 18,
			fontColor : "#111"

		},
		legend : {
			display : true,
			position : "bottom"
		}
	};

var ctx1 = $("#chartcanvas");

				var chart1 = new Chart( ctx1, {
		type : "line",
		data : data1,
		options:options
	});






});


</script>
</body>

</html>