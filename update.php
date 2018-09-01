<?php 
include_once 'connection.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$sql  = "UPDATE user SET  name ='$name', email ='$email', phone ='$phone' where id = '$id' ";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo '1';
	}else{
		echo '2';
	}

 ?>
