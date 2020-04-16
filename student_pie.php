<?php




include 'database.php';

$sql = "SELECT * FROM attendence1 where facid like '".$_GET["facid"]."' and subject like '".$_GET["subject"]."'";
$result = mysqli_query($conn, $sql);

$data[]=array();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    //echo $row['facid'];

    $data[0][]=$row;
    }
}





$enroll=$_GET["enrollment"];
$sql = "SELECT * FROM attendence2 where enrollment like '".$enroll."' and subject like '".$_GET["subject"]."' and facid like '".$_GET["facid"]."'";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  //  echo $row['enrollment'];

    $data[1][]=$row;
    }
} else {

}
//print_json_encode($data);
//echo json_encode($data);


mysqli_close($conn);

?>