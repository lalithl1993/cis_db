<?php
 
if($_SERVER['REQUEST_METHOD']=='POST'){
$table = $_POST['table'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
require_once('dbConnect.php');
$sql = "INSERT INTO $table (name,email,password) VALUES ('$name','$email','$password')";
if(mysqli_query($con,$sql)){
echo "Successfully Registered";
}else{
echo "Could not register";
 
}
}else{
echo 'error';
}
?>