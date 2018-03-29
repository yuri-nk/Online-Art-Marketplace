<?php if(isset($_POST['delete'])){
	$email = htmlspecialchars($_POST['email']);
	$conn = mysQli_connect("localhost", "root","","oag");
	$sql  = "DELETE FROM user WHERE email='$email'";
	if(mysqli_query($conn,$sql)){
		echo "<script type=\"text/javascript\"> 
					alert(\"profile deleted! .\");
				</script>";
		header('Location:adminprofile.php');
			
	}else{
		echo "not deleted";
	}
}
?>

<html>
<head>

	<title> Search for a User:</title>
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
				<li style="float:right"><a href="index.php">Log out</a></li>
				<li style="float:right"><a href="adminprofile.php">Profile</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li> 
			</ul>
		</div>
	
	<h2>Search for a user below:<h2><br><br>
	<form action="searchResultProfile.php" method="POST">
		<table>
		<label>Search By : </label>
			<select name="searchby">
					  <option value="email" name ="email">Email</option>
					  <option  name" name = "firstname" >First Name</option>
					  <option  name = "lasttname" >Last Name</option>
			</select>
			<p>
			<input type = "text" name ="searchbox" >
			</p>
			<tr><td><input type="submit" id="submitt" name="submit" value="view profile"></td></tr>
			

		
		</table>
	</form>
</body>
</html>