
<html>
	<head>
		<title>sign up Page</title>
		<link rel = "stylesheet" type ="text/css" href = "css/styleSignup.css">
		<link rel="stylesheet" href="css/indexstyle.css">
	</head>
	
	<body>
	<div class="mainmenu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="painting.php">Painting</a></li>
				<li><a href="sculpture.php">Sculpture</a></li>
				<li><a  href="photography.php">Photography</a></li>
				<li><a href="abstractArt.php">Abstract Art</a></li>
				<li><a href="artPrinting.php">Art Printing</a></li>
				<li><a href="artist.php">Artist</a></li>
				<li style="float:right"><a href="signUp.php">Sign Up</a></li>
				<li style="float:right"><a href="login.php">Sign In</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li> 
			</ul>
		</div>
		<h1 style = "color:white;font-size:50px;margin-left:29%;color:black" > The Online Art Marketplace</h1>
		<div id = "signupfrm">
			
			<form action= "<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<h1>Welcome!</h1>
				<p>
					<label>First Name:</label>
					<input type = "text" id = "firstname" name = "firstname" />
				</p>
				<p>
					<label>Last Name:</label>
					<input type = "text" id = "lastName" name = "lastname" />
				</p>
				<p>
					<label>Email Address:</label>
					<input type = "text" id = "email" name = "email" />
				</p>
				
				<p>
					<label>Password       :<label>
					<input type = "password" id = "password" name = "password" />
				</p>
				<p>
					<label>Confirm Password       :<label>
					<input type = "password" id = "confirmpass" name = "confirmpassword" />
				</p>
				<p>
					<label>Address  :<label>
					<input type = "text" id = "address" name = "address" />
				</p>
				<p>
					<input type = "submit" id = "regbtn" name = "submit" value = "REGISTER" />
				</p>
				
				<p>
					<label>Already have an account?</label>
					<a href="login.php">Sign In</a><br>
				</p>
			</form>
		</div>
			
	</body>
</html>




<?php
$userid = 0;
if(isset($_POST['submit'])){
	
		$firstname = htmlspecialchars($_POST['firstname']);
		$lastname = htmlspecialchars($_POST['lastname']);
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);
		$confirmpassword = htmlspecialchars($_POST['confirmpassword']);
		$address = htmlspecialchars($_POST['address']);
	//echo "entered yo";
	
	//$f= $_POST['firstname'];
	//echo $f;
	 //echo htmlspecialchars($_POST["email"]); 
	
	if($firstname=="" || $lastname=="" || $email== "" || $password== "" || $confirmpassword== "" ||  $_POST['address']== ""  )
	{
		echo "<script type=\"text/javascript\">
					alert(\"more information required.\"); 
				</script>";
				
	}
	else if($password != $confirmpassword){
		echo "<script type=\"text/javascript\"> 
					alert(\"password did'nt match, try again .\");
				</script>";
	}else{

		$conn = mysQli_connect("localhost", "root","","oag");
		
		if(!$conn)
			echo"Connection unsuccessful".mysQli_connect_error;
		else{
			echo"Connection successful";
			$sql  = "INSERT INTO user(userid,email,firstname,lastname,password,address,usertype)
			VALUES('$userid',  '$email', '$firstname',  '$lastname','$password','$address','User');";
			
			if(mysqli_query($conn,$sql)){
				echo "<script type=\"text/javascript\"> 
					alert(\"Successfully Registerd.\"); 
				</script>";
				//header("Location:login.php");
			}
			else{
				echo "<script type=\"text/javascript\"> 
					alert(\"Something went wrong\"); 
				</script>";
			}
		}
	}
}
?>