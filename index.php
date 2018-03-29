<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Online Art Marketplace</title>
	<link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>
	<div class="main">
		<div class="header">
			<img src="images/header.jpg" alt="Header image" width="960px">
		</div>

		<div class="mainmenu">
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
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
		<div class="main_content">
			<h2>The Online Art Marketplace</h2>
			<h4>Meet 117,002 contemporary artists, buy directly from them.</h4><hr>

			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="painting.php">
						<img src="images/painting.jpg" alt="Painting" width="300" height="200">
					</a>
					<div class="desc">Painting</div>
				</div>
			</div>


			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="sculpture.php">
						<img src="images/sculpture.jpg" alt="Sculpture" width="600" height="400">
					</a>
					<div class="desc">Sculpture</div>
				</div>
			</div>

			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="photography.php">
						<img src="images/photography.jpg" alt="Photography" width="600" height="400">
					</a>
					<div class="desc">Photography</div>
				</div>
			</div>

			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="abstractArt.php">
						<img src="images/abstractart.jpg" alt="Abstract Art" width="600" height="400">
					</a>
					<div class="desc">Abstract Art</div>
				</div>
			</div>
			
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="artPrinting.php">
						<img src="images/artpainting.jpg" alt="Art Painting" width="600" height="400">
					</a>
					<div class="desc">Art Painting</div>
				</div>
			</div>
			
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="artist.php">
						<img src="images/artist.jpg" alt="Artist" width="600" height="400">
					</a>
					<div class="desc">Artist</div>
				</div>
			</div>

			<div class="clearfix"></div>

			<div style="padding:6px;">
				<p>This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
				<p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
			</div>
		</div>

		<div class="footer">
			<p>&copy; 2015</p>
		</div>	
		

	</div>
	
</body>
</html>