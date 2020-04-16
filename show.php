
<?php
include 'database.php';
include 'student_pie.php'
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
<h1 style="background-color:blue"><a href='index.php?enrollment=<?php echo $_GET["enrollment"] ?>'><-</a> </h1>
</div>
	
	<div>
	<canvas id="chartcanvas" >
	</canvas>
	</div>

<script src="js/jquery.min.js"></script>
<script src="js/Chart.min.js"></script>

<script type="text/javascript">

 var data = <?php echo json_encode($data, JSON_HEX_TAG); ?>;
 console.log(data);

$(document).ready(function() {

var url = new URL(window.location.href);
var enrollment = url.searchParams.get("enrollment");
var facid = url.searchParams.get("facid");
var subject = url.searchParams.get("subject");
var url="http://localhost/attendence/student_pie.php?enrollment="+enrollment+"&facid="+facid+"&subject="+subject;

console.log(url);


			console.log(data[0].length);
			console.log(data[1].length);

var totaltaken=data[0].length;


var totalgiven=data[1].length;

			var data1 = {
		labels : [totalgiven+" present", totaltaken-totalgiven+" absent "],
		datasets : [
			{
				label : "Attendence",
				data : [totalgiven,totaltaken-totalgiven],
				backgroundColor : [
                    "#00ff00",
                    "#ff0000",
                
                ],
                borderColor : [
                    "#CDA776",
                    "#989898",
               ],
                borderWidth : [4, 4]
			}
		]
	};
	var options = {
		title : {
			display : true,
			position : "top",
			text : "Attentence percentage of "+subject+" is "+(totalgiven/totaltaken)*100+" %",
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
		type : "pie",
		data : data1,
		options:options
	});





	/**
	 * call the data.php file to fetch the result from db table.
	 */


/*
	$.ajax({
		url : url,
		type : "GET",
		success : function(data){
//document.write("jjj");
			console.log(data[0].length);
			console.log(data[1].length);

var totaltaken=data[0].length;


var totalgiven=data[1].length;

			var data1 = {
		labels : [totalgiven+" present", totaltaken-totalgiven+" absent "],
		datasets : [
			{
				label : "Attendence",
				data : [totalgiven,totaltaken-totalgiven],
				backgroundColor : [
                    "#00ff00",
                    "#ff0000",
                
                ],
                borderColor : [
                    "#CDA776",
                    "#989898",
               ],
                borderWidth : [4, 4]
			}
		]
	};
	var options = {
		title : {
			display : true,
			position : "top",
			text : "Attentence percentage of "+subject+" is "+(totalgiven/totaltaken)*100+" %",
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
		type : "pie",
		data : data1,
		options:options
	});


		},
		error : function(data) {
			console.log(data);
		}
	});
*/


});


</script>
</body>

</html>