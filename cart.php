
<?php
if(isset($_POST['cartbutton'])){
	$imageid = htmlspecialchars($_POST['imageid']);
	if($imageid!=""){
	
	$imageid = htmlspecialchars($_POST['imageid']);
	$userid="";
	
	$link = mysqli_connect("localhost","root","","oag") or die ("could not connect to server");
	mysqli_select_db($link,"oag") or die ("that database could not be found");
	//echo $usertype;
	$userquery = mysqli_query($link,"SELECT * FROM currentuser WHERE currentid=1") or die ("the query could not be completed, pls try again later");
	if(mysqli_num_rows($userquery) != 1){
		die ("that username could not be found");	
	}
	else{
		
		while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
			$userid = $row['userid'];
		}
		$conn = mysQli_connect("localhost", "root","","oag");
		if(!$conn)
				echo"Connection unsuccessful".mysQli_connect_error;
		else{
			//echo"Connection successful";
			$sql  = "INSERT INTO cart(userid,imageid)
			VALUES('$userid', '$imageid');";
			
			if(mysqli_query($conn,$sql)){
				echo "<script type=\"text/javascript\"> 
					alert(\"Added to cart.\"); 
				</script>";
			}
			else{
				echo "<script type=\"text/javascript\"> 
					alert(\"Sorry\"); 
				</script>";
			}
		}
	}
	}
	else{
		echo "<script type=\"text/javascript\"> 
					alert(\"Add imageid please.\"); 
				</script>";
		
	}
}	
if(isset($_POST['seecart'])){
	
	
	
	$link = mysqli_connect("localhost","root","","oag") or die ("could not connect to server");
	mysqli_select_db($link,"oag") or die ("that database could not be found");
	//echo $usertype;
	$userquery = mysqli_query($link,"SELECT * from cart") or die ("the query could not be completed, pls try again later");
	if(mysqli_num_rows($userquery) != 1){
		die ("no item found");	
	}
	else{
		while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
			$userid = $row['userid'];
			$imageid = $row['imageid']; ?>
			<label class = "imgid" > userid : <?php echo $userid; ?> </label>
			<label class = "imgid"> imageid :<?php  echo $imageid; ?> </label><br>
			<?php
		}
		}
	
	
}
	
?> 


<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<link rel="stylesheet" href="css/indexstyle.css">
	<link rel="stylesheet" href="css/painting.css">
</head>

<body>
	<form action= "<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	<div class="main">

		
		
		<div class = "cartelement">
				<input type = "text" placeholder ="image id" name = "imageid">
				<input type = "submit" name = "cartbutton" value = "Add to cart">
				<input type = "submit" name = "seecart" value = "See items">
		</div>
		 
	</div>
	</form>

</body>
</html>