


<!DOCTYPE html>
<html>
	<head>
		<title>Contact us Page</title>
		<link rel = "stylesheet" type ="text/css" href = "css/styleLogin.css">
		<link rel="stylesheet" href="css/indexstyle.css">
	</head>
	
	<body>
		<div class="mainmenu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="painting.php">Painting</a></li>
				<li><a href="sculpture.php">Sculpture</a></li>
				<li><a href="photography.php">Photography</a></li>
				<li><a  href="abstractArt.php">Abstract Art</a></li>
				<li><a href="artist.php">Artist</a></li> 
				<li style="float:right"><a href="signUp.php">Sign Up</a></li>
				<li style="float:right"><a href="login.php">Sign In</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li> 
			</ul>
		</div>
		<div id = "frm">
			<form action = "somethin.php" method "POST">  
			<?php // Thank you for your enquiry, a member of our team will be in touch as soon as possible. ?>
			<h1><CENTER>Get In Touch<CENTER></h1>
				<p>
					<input type = "text" id = "name" name = "name" placeholder ="Name" />
				</p>
				
				<p>
					<input type = "text" id = "email" name = "email" placeholder = "Email Address" />
				</p>
				<p >
					<input type = "text" id = "mobile" name = "mobile" placeholder ="Mobile No." />
				</p>
				<p class= "massage">
					<input type = "text" id = "massage" name = "massage" placeholder ="Massage" />
				</p>
				
				<p>
					<input type = "submit" id = "submit" name ="submit" value = "Submit" />
				</p>
		
			</form>
		</div>
			
	</body>
</html>