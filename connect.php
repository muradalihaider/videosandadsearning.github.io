<?php 
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'vae_db';

	$connection = mysqli_connect($host,$user,$password,$database);
	if (isset($_POST['submit'])) {
		
		if ( !empty($_POST['name'])
		&& !empty($_POST['email']) 
		&& !empty($_POST['phone'])
		&&!empty($_POST['password'])) {

			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];

			$quary = "insert into user_data(fname,email,phone,password) values('$name' , '$email' , '$phone' , '$password')";
			$run = mysqli_query($connection,$quary) or die(mysqli_error());

			if ($run) {
				header("Location: dishboard.php", true, 301);
				exit();
			} else {
				echo "Data is submited";
			}

		} else {
			echo "All Field is Required";
		}
	}




	// // Check connection
	// if ($connection -> connect_errno) {
	//   echo "Failed to connect to MySQL: " . $connection -> connect_error;
	//   exit();
	// }
	// $sql = "INSERT INTO gpgckhar (name, password, gender, email, phone) VALUES ('$name', '$password', '$gender', '$email', '$phone')";

	// if ($connection->query($sql) === TRUE) {
	//  	echo "New record created successfully";
	// } else {
	//  	echo "Error: " . $sql . "<br>" . $connection->error;
	// }