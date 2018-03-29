<html>
<head>

	<title> Search for a User:</title>

</head>


<body>
		<div class="mainmenu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="painting.php">Painting</a></li>
				<li><a href="sculpture.php">Sculpture</a></li>
				<li><a class="active" href="photography.php">Photography</a></li>
				<li><a href="abstractArt.php">Abstract Art</a></li>
				<li><a href="artPrinting.php">Art Printing</a></li>
				<li><a href="artist.php">Artist</a></li>
				<li style="float:right"><a href="login.php">Log out</a></li>
				<li style="float:right"><a href="adminprofile.php">Profile</a></li>
			</ul>
		</div>
	
	<h2>Search for a user below:<h2><br><br>
	<form action="profile.php" method="POST">
		<table>
			<tr><td>username:</td> <td><input type="text" name="userF" id = "userF" ></td></tr>
			<tr><td><input type="submit" id="submitt" name="submit" value="view profile"></td></tr>
			<a href ="index.html">Home</a><br>	
	</form>
</body>
</html>