

<?php

$firstname = "";
$lastname = "";
$userid = "";
$earning = "";
$address = "";
if(isset($_POST['submit'])){
	echo "submitted";
	$email = htmlspecialchars($_POST['email']);
	$firstname = htmlspecialchars($_POST['firstname']);
	$lastname = htmlspecialchars($_POST['lastname']);
	$address = htmlspecialchars($_POST['address']);
	
	$conn = mysQli_connect("localhost", "root","","oag");
	if($conn){
		$sql  = "UPDATE user SET email='$email' , firstname = '$firstname',lastname = '$lastname', address = '$address 'WHERE email= '$email'";
		if(mysqli_query($conn,$sql)){
			echo "<script type=\"text/javascript\"> 
					alert(\"profile updated! .\");
				</script>";
			header('Location:profile.php');
		}else{
			echo "email is used already ";
		}
	}
	
}
else if(isset($_POST['delete'])){
	$email = htmlspecialchars($_POST['email']);
	$conn = mysQli_connect("localhost", "root","","oag");
	$sql  = "DELETE FROM user WHERE email='$email'";
	if(mysqli_query($conn,$sql)){
		echo "<script type=\"text/javascript\"> 
					alert(\"profile deleted! .\");
				</script>";
		header('Location:login.php');
			
	}else{
		echo "not deleted";
	}
}
else if(isset($_POST['edit'])){
	
	$email = htmlspecialchars($_POST['email']);
	$link = mysqli_connect("localhost","root","","oag") or die ("could not connect to server");
	mysqli_select_db($link,"oag") or die ("that database could not be found");
	$userquery = mysqli_query($link,"SELECT * FROM user WHERE email= '$email'") or die ("the query could not be completed, pls try again later");
	if(mysqli_num_rows($userquery) != 1){
		die ("that username could not be found");	
	}else{
		while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$email = $row['email'];
			$userid = $row['userid'];
			$earning = $row['earnings'];
			$address = $row['address'];
		}
	}
}



else if(isset($_POST['showimage'])){
	header('location:imageupload.php');
}
?>


<html>
	<head>
		<title>User Profile</title>
		<link rel = "stylesheet" type ="text/css" href = "Profile.css">
		<link rel="stylesheet" href="css/indexstyle.css">
	</head>
	<body>
		
		<div class="mainmenu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="painting.php">Painting</a></li>
				<li><a href="sculpture.php">Sculpture</a></li>
				<li><a href="photography.php">Photography</a></li>
				<li><a href="abstractArt.php">Abstract Art</a></li>
				<li><a href="artist.php">Artist</a></li>
				<li style="float:right"><a href="login.php">Log out</a></li>
				<li style="float:right"><a href="profile.php">Profile</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li> 
			</ul>
		</div>
		<h1 style = "color:white;font-size:50px;margin-left:29%;color:black" >User Profile's Information</h1>
		<div id = "signupfrm">
			<form action= "<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<h1>Welcome <?php echo $firstname ?></h1>
				<p>
					<label>User ID :</label> <br>
					<input type = "text" id = "uname" name = "userid"  value = "<?php  echo $userid ?>" readonly />
				</p>
				<p>
					<label>First Name :</label> <br>
					<input type = "text" id = "uname" name = "firstname"  value = "<?php  echo $firstname ?>" />
				</p>
				<p>
					<label>Last Name :</label> <br>
					<input type = "text" id = "uname" name = "lastname"  value = "<?php  echo $lastname ?>" />
				</p>
				<p>
					<label>Email :</label><br>
					<input type = "text" id = "lastName" name = "email" value ="<?php  echo $email ?>"  />
				</p>
				
				<p>
					<label>Total Earnings :</label> <br>
					<input type = "text" id = "uname" name = "earning"  value = "<?php  echo $earning ?>" readonly />
				</p>
				
				<p>
					<label>Address :<label><br>
					<input type = "text" id = "email" name = "address" value = "<?php  echo $address ?> "  />
				</p>
				
				<p>
					<input type = "submit" name = "submit" value = "submit" />
			
				</p>
				
			</form>
		</div>
		
	</body>
</html>