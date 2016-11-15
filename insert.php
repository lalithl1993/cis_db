
<?php
// $id=$_POST['id'];
// $table = $_POST['table'];
$sql=$_GET['q'];
require_once('dbConnect.php');

// $sql = "SELECT * FROM $table WHERE id='$id'";
if($result = mysqli_query($con,$sql))
{
    echo "1";
}
else
{
    echo"0";
}
?>