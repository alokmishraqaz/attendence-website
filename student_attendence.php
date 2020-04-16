<?php
include 'database.php';



$facid=trim($_GET["facid"]);
$data=trim($_GET["data"]); 
$time=trim($_GET["time"]);
$subject=trim($_GET["subject"]);
$sem=trim($_GET["semester"]);
$date=date("Y-m-d");
$sql = "INSERT INTO attendence2 (facid,enrollment,date,time,subject,semester)
VALUES ('".$facid."', '".$data."','".$date."','".$time."','".$subject."','".$sem."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
    






?>