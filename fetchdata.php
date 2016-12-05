<?php
// $id=$_POST['id'];
// $table = $_POST['table'];
$sql=$_GET['q'];
require_once('dbConnect.php');

// $sql = "SELECT * FROM $table WHERE id='$id'";
$result = mysqli_query($con,$sql);
$resultarray = array();
if($row =mysqli_fetch_array($result))
    {
        echo $row[0];
    }
    else
    {
    	echo "0";
    }
    // echo "{\"result\":";
    // echo json_encode($resultarray);
    // echo "}";

?>