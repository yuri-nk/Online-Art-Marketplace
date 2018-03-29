<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel = "stylesheet" type ="text/css" href = "css/styleLogin.css">
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
				<li style="float:right"><a href="signUp.php">Sign Up</a></li>
				<li style="float:right"><a href="login.php">Sign In</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li> 
			</ul>
		</div>
	
		<div id = "frm">
			<form action = "<?php $_SERVER["PHP_SELF"] ?>" method = "POST">  
			<h1>The Online Art Marketplace</h1>
				<p>
					<label>Email:</label>
					<input type = "text" id = "user" name = "username" />
				</p>
				<p>
					<input type = "submit" id = "btn" value = "Submit" name="submit" />
				</p>
				<p>
					<a href="index.php">Home</a><br>
				</p>
			</form>
		</div>	
<?php

	if(isset($_POST['submit'])){
		echo "<script type=\"text/javascript\"> 
				alert(\"An password has been sent to your email.\"); 
			</script>";
	}
?>		
	</body>
</html>