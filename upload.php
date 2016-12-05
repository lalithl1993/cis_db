<?php
	
if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$image = $_POST['image'];
        $name = $_POST['name'];
        $crid=$_POST['crid'];
        $categoryid=$_POST['categoryid'];
		$incid;
		require_once('dbConnect.php');
		echo"before if1";





		$sql="INSERT INTO files (image,name,classroomid,crid,categoryid) VALUES ('null','$name','$crid','$crid','$categoryid');";
        
        if(mysqli_query($con,$sql)) {
            echo"inside if1";
        //    $incid=2;
        $incid=mysqli_insert_id($con);
            //$incid=$mysqli->insert_id;
        echo "\n$incid";
        }






		// $sql ="SELECT id FROM files ORDER BY id ASC";
		
		// $res = mysqli_query($con,$sql);
		
		// $id = 0;
		
		// while($row = mysqli_fetch_array($res)){
		// 		$id = $row['id'];
		// }
		
		$path = "uploads/$incid.png";
		
		//$actualpath = "http://localhost/CIS/$path";
		
		$sql = "UPDATE files SET image='$incid.png' where id=$incid";
		
		if(mysqli_query($con,$sql)){
			file_put_contents($path,base64_decode($image));
			echo "Successfully Uploaded";
		}
		
		mysqli_close($con);
	}else{
		echo "Error";
	}
?>