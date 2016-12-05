
<?php
// $id=$_POST['id'];
// $table = $_POST['table'];
$class_id=$_GET['class_id'];
$student_id=$_GET['student_id'];
require_once('dbConnect.php');

$sql = "SELECT * FROM classrepresentative WHERE id='$class_id'";
$result = mysqli_query($con,$sql);
$resultarray = array();
if($row =mysqli_fetch_assoc($result))
    {
    	$sql1="INSERT INTO `class`( `classroomid`, `studentid`) VALUES ('$class_id','$student_id')";
        if($result1 = mysqli_query($con,$sql1))
			{
			    echo "1";
			}
			else
			{
				echo "0";
			}
    }
	else
	{
    echo"0";
	}
?>