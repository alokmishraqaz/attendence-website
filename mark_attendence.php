<?php
include 'database.php';



$facid=trim($_GET["facid"]);
$tim=trim($_GET["time"]); 
$dat=date("Y-m-d");
$sub=trim($_GET["subject"]);
$sem=trim($_GET["semester"]);

$sql = "INSERT INTO attendence1 (facid,time,date,subject,semester)
VALUES ('".$facid."', '".$tim."','".$dat."','".$sub."','".$sem."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
    






?>