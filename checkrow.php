
<?php
// $id=$_POST['id'];
// $table = $_POST['table'];
$sql=$_GET['q'];
require_once('dbConnect.php');

// $sql = "SELECT * FROM $table WHERE id='$id'";
$result = mysqli_query($con,$sql);
$resultarray = array();
if($row =mysqli_fetch_assoc($result))
{
	echo "1";
}
else
{
	echo "0";
}
    

?>
