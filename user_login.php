<!DOCTYPE html>
<html>
<head>
	<style>
		*{
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
		}
		.container{
			border-radius: 25px;
			background-color: white;
			opacity: 0.6;
			max-width: 30%;
			display: block;
			padding: 60px;
			margin: auto;
			position: absolute;
			top: 10%;
			left: 35%;
			/*text-align: center;*/
			/*padding-top: 30px;*/
		}
		input[type=text], input[type=Email], input[type=tell], input[type=password] {
			  width: 100%;
			  padding: 10px;
			  margin: 5px 0 22px 0;
			  display: inline-block;
			  border: none;
			  background: #f1f1f1;
			  border-radius: 25px;

		
		}
		input[type=text]:focus, input[type=Email]:focus, input[type=tell]:focus, input[type=password]:focus {
			  background-color: #ddd;
			  outline: none;
			}
		.bg{
			width: 100%;
			opacity: 0.6;
			position: absolute;
			z-index: -1;
		}
		.ab{
			color: white;
			bottom: 2%;
			text-align: center;
			background-color: #000066;
			margin-bottom: 10%;
			border-radius: 25px;
		}
		.button {
			margin-top: 6%;
		  background-color: #4CAF50; /* Green */
		  border: none;
		  color: white;
		  padding: 10px 22px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  border-radius: 25px;
		}
		  float: left;
		  width: 50%;
		  margin: auto;
		  padding: 0 50px;
		  margin-top: 6px;
		}
	/*	.bc {
			margin: 3px;
			color: black;
			opacity: 1;
		}*/
			  
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<div class="container">
		<h1 class="ab">Login</h1>
		<form method="POST" action="user_login_model.php">
	
			<div>
				<label for="cell"><b>Phone No</b></label>
				<input type="tell" placeholder="+092" name="cell" id="cell" required>
			</div>

			<div>
				<label for="password"><b>Password</b></label>
				<input type="password" placeholder="***" name="password" id="password" required>
			</div>

			<button type="submit" name="submit" value="Submit" class="button" style="float: right;">Submit</button>
		</form>	
	</div>
</body>
</html>