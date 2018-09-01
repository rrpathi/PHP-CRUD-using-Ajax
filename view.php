<?php 
	include_once 'connection.php';
	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn,$sql);
	$table = '<table border="1px">
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Phone</td>
				<td>Action</td>
			</tr>';
	
		while($data = mysqli_fetch_array($result)){
			$table = $table.'<tr><td>'.$data['name'].'</td><td>'.$data['email'].'</td><td>'.$data['phone'].'</td><td><button class="editData" id="'.$data['id'].'">Edit</button>/<button class="deletedata" id="'.$data['id'].'">Delete</button></td></tr>';
		}	
		echo $table;
 ?>
