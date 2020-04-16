<?php


include 'database.php';



$data[]=array();
for($i=0;$i<11;$i++){

$date1="2020-".($i+1).'-1';
$date2="2020-".($i+2).'-1';



$sql = "SELECT count(*) as cn FROM `attendence2` where enrollment like '".$_GET['enrollment']."'and date between '".$date1."' and '".$date2. "'";



$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    //echo $row['facid'];

    $data[$i][]=$row;
    }
}

}






$date1="2020-12-1";
$date2="2020-12-31";




$sql = "SELECT count(*) as cn FROM `attendence2` where enrollment like '".$_GET['enrollment']."'and date between '".$date1."' and '".$date2. "'";



$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    //echo $row['facid'];

    $data[11][]=$row;
    }
}












?>