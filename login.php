<?php
 
if($_SERVER['REQUEST_METHOD']=='POST'){
$table = $_POST['table'];
$email = $_POST['email'];
$password = $_POST['password'];
require_once('dbConnect.php');
$sql = "SELECT * FROM $table WHERE email = '$email' AND password='$password'";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
}
else{
echo 'error';
}

?>