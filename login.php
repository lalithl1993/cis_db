<?php
 
if($_SERVER['REQUEST_METHOD']=='POST'){
$table = $_POST['table'];
$email = $_POST['email'];
$password = $_POST['password'];
require_once('dbConnect.php');
$sql = "SELECT * FROM $table WHERE email = '$email' AND password='$password'";
$result = mysqli_query($con,$sql);
if($row = mysqli_fetch_assoc($result))
{
	echo $row['id'];
}else{
echo 'failure';
}
}
else{
echo 'error';
}

?>