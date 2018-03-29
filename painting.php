<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Painting</title>
	<link rel="stylesheet" href="css/indexstyle.css">
	<link rel="stylesheet" href="css/painting.css">
</head>

<body>

	<div class="main">

		<div class="mainmenu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a class ="active"href="painting.php">Painting</a></li>
				<li><a href="sculpture.php">Sculpture</a></li>
				<li><a href="photography.php">Photography</a></li>
				<li><a href="abstractArt.php">Abstract Art</a></li>
				<li><a href="artist.php">Artist</a></li>
				<li style="float:right"><a href="signUp.php">Sign Up</a></li>
				<li style="float:right"><a href="login.php">Sign In</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li> 
			</ul>
		</div>
		<?php  
		$connect = mysqli_connect("localhost", "root", "", "oag");  
		$query = "SELECT * FROM image where catagoryname ='painting'";  
		$result = mysqli_query($connect, $query); 
		if (!$result) {
			printf("Error: %s\n", mysqli_error($connect));
			exit();	
		}?>
		
		
		<?php
		while($row = mysqli_fetch_array($result))  
		{  ?>
			<div class = "imageset" >
			<?php
			$imgid = $row['imageid'];
			$price = $row['price'];
			echo'<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="300" width="350" class="img-thumnail" /> ';
			?>
			<br><label class = "imgid">imageid: <?php echo $imgid?></label><br>
			<label class = "imgid"> price: <?php echo $price?></label>
			<?php
			
			 
			?>
			</div>	
			<?php
		}
		?> 
	</div>

</body>
</html>