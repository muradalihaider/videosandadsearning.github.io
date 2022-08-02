<?php 
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'vae_db';

	$connection = mysqli_connect($host,$user,$password,$database);
	if (isset($_POST['submit'])) {
		
		if ( !empty($_POST['trxt'])
	) {

			$trxt = $_POST['trxt'];
		;

			$quary = "insert into transiton_id(trxt_id) values('$trxt')";
			$run = mysqli_query($connection,$quary ) or die(mysqli_error());

			if ($run) {
				echo "<h1><center>Please wait for 30 mint your data is submitted sucessfully</center></h1>";
				exit();
			} else {
				echo "Data is submited";
			}

		} else {
			echo "All Field is Required";
		}
	}

