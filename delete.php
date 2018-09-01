<?php 
	include_once 'connection.php';
	// $id = $_POST['user_id'];
	$id = $_POST['id'];
	$sql = "DELETE  FROM user WHERE id='$id'";
	$data = mysqli_query($conn,$sql);
	if($data){
		echo '1';
	}else{
		echo '2';
	}
 ?>
