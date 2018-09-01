<?php 
	include_once 'connection.php';
	$id = $_POST['id'];
	// $id = '1';
	$sql = "SELECT * FROM user WHERE id='$id'";
	$data = mysqli_query($conn,$sql);
	$fetch = mysqli_fetch_assoc($data);
	echo json_encode($fetch);
 ?>
