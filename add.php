<?php 
	include('connection.php');
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $sql = "INSERT INTO user (name,email,phone) VALUES('$name','$email','$phone')";
	 $result = mysqli_query($conn,$sql);
	 if($result){
	 	echo '1';
	 } else{
	 	echo '2';
	 }
 ?>
