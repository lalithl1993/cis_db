<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 11/1/2016
 * Time: 6:55 PM
 */
require_once 'dbConnect.php';
 
//connecting to the db
//$con = mysqli_connect(HOST,USER,PASS,DB) or die("Unable to connect");
 
//sql query
$sql = "SELECT * FROM `files`";
//$sql = "INSERT INTO files (image,name) VALUES ('$file_url','$name')";
 
//getting result on execution the sql query
$result = mysqli_query($con,$sql);
 
//response array
$response = array();
 
$response['error'] = false;
 
$response['message'] = "PDfs fetched successfully.";
 
$response['pdfs'] = array();
 
//traversing through all the rows
 
while($row =mysqli_fetch_array($result)){
    $temp = array();
    $temp['id'] = $row['id'];
    $temp['url'] = $row['url'];
    $temp['name'] = $row['name'];
    array_push($response['pdfs'],$temp);
}
 
echo json_encode($response);
?>