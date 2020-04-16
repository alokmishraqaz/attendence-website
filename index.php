
<?php
include 'database.php';
include 'attendence_count.php';
?>

<html>

<head>



</head>

<body>


<div >
<form method="GET" action="show.php">
<table  style="width:100%; position:fixed;top:0px; " >
	<input type="hidden" name="enrollment" value="<?php echo $_GET["enrollment"]; ?>">
	<th style="width:33%">
<select  name="facid" style="width:75%" >
<?php
$enroll=$_GET["enrollment"];
echo $enroll;
$sql = "SELECT distinct facid FROM attendence2 where enrollment like '".$enroll."'";
echo $sql;
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  //  echo $row['enrollment'];
    ?>
    
<option value="<?php echo $row["facid"] ?>"><?php echo $row["facid"] ?></option>
   
    <?php
    }
}

?>

</select>
</th>
<th style="width:33%">



<select  name="subject" style="width:75%">
<?php
$enroll=$_GET["enrollment"];
echo $enroll;
$sql = "SELECT distinct subject FROM attendence2 where enrollment like '".$enroll."'";
echo $sql;
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  //  echo $row['enrollment'];
    ?>
<option value="<?php echo $row["subject"] ?>"><?php echo $row["subject"] ?></option>
    <?php
    }
}

?>

</select>
</th>


<th style="width:33%">

<button type="submit" name="submit" style="width:75%">Show</button>
</th>
</form>

</div>
	
	<div style="margin-top:10%;">
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
			text : "Attentence",
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