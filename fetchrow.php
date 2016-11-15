
<?php
// $id=$_POST['id'];
// $table = $_POST['table'];
$sql=$_GET['q'];
require_once('dbConnect.php');

// $sql = "SELECT * FROM $table WHERE id='$id'";
$result = mysqli_query($con,$sql);
$resultarray = array();
while($row =mysqli_fetch_assoc($result))
    {
        $resultarray[] = $row;
    }
    echo "{\"result\":";
    echo json_encode($resultarray);
    echo "}";

?>
