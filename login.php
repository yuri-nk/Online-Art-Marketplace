<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel = "stylesheet" type ="text/css" href = "css/styleLogin.css">
		<link rel="stylesheet" href="css/indexstyle.css">
	</head>
	
	<body>
	<div class="mainmenu">
			<ul>
				<li><a  href="index.php">Home</a></li>
				<li><a href="painting.php">Painting</a></li>
				<li><a href="sculpture.php">Sculpture</a></li>
				<li><a href="photography.php">Photography</a></li>
				<li><a href="abstractArt.php">Abstract Art</a></li>
				<li><a href="artist.php">Artist</a></li>
				<li style="float:right"><a href="signUp.php">Sign Up</a></li>
				<li style="float:right"><a href="login.php">Sign In</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li> 
			</ul>
		</div>
		
		<div id = "frm">
			<form action= "<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<h1>The Online Art Marketplace</h1>
				<p>
					<label>Email:</label>
					<input type = "text" id = "email" name = "email" />
				</p>
				
				<p>
					<label>Password :</label>
					<input type = "password" id = "pass" name = "password" />
				</p>
				<p>
					<label>User type :</label>
					<select name="usertype">
						<option value="" name ="">''</option>
					  <option value="Admin" name ="Admin">Admin</option>
					  <option value="User" name = "User" >User</option>
					</select>
				</p>
				<p>
					<input type = "submit" id = "fbtn" value = "Forget Password?" name="forgetPassword" />
					<input type = "submit" id = "btn" value = "Login" name="submit" />
				</p>
				<p>
					<label>New Here ?</label>
					<a href="signUp.php">Register now</a><br>
				</p>
			</form>
		</div>
			
	</body>
</html>

<?php
$userid = 0;
if(isset($_POST['submit'])){
	
		
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);
		$usertype = htmlspecialchars($_POST['usertype']);
		
	
	if($usertype=="" ||  $email== "" || $password== "" )
	{
		echo "<script type=\"text/javascript\">
					alert(\"more information required.\"); 
				</script>";		
	}
	else{

			$link = mysqli_connect("localhost","root","","oag") or die ("could not connect to server");
			mysqli_select_db($link,"oag") or die ("that database could not be found");
			//echo $usertype;
			$userquery = mysqli_query($link,"SELECT * FROM user WHERE email='$email' AND password = '$password' AND usertype = '$usertype'") or die ("the query could not be completed, pls try again later");
			if(mysqli_num_rows($userquery) != 1){
				die ("that username could not be found");	
			}
			else{
				$ownerid="";
				while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
					$ownerid = $row['userid'];
				}
				echo "userconfrmd";
				echo $ownerid;
				$uid=1;
				$conn = mysQli_connect("localhost", "root","","oag");	
				if($usertype=="Admin"){
					if($conn){
						$sql  = "UPDATE currentuser SET email='$email' , usertype = '$usertype', userid ='$ownerid' WHERE currentid= 1";
						if(mysqli_query($conn,$sql)){
							header('Location:adminprofile.php');
						}else{
							echo "query problem";
						}
					}
					else{
						echo "Conn error";
					}
				}
				else{
					if($conn){
						$sql  =  "UPDATE currentuser SET usertype = '$usertype' ,email='$email',userid ='$ownerid' WHERE currentid= 1";
						if(mysqli_query($conn,$sql))
						{
							header('Location:profile.php');
						}
						else{
							echo "query problem";
						}
					}else{
						echo "Conn error";
					}
				}
			}
	}
}
?>