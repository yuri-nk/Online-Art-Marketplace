<?php
$email="";
$firstname = "";
$lastname ="";
$userid = "";
$earning ="";
$address = "";
if(isset($_POST['submit'])){
	$searchby = htmlspecialchars($_POST['searchby']);
	$searchbox = htmlspecialchars($_POST['searchbox']);
	echo $searchbox;
	echo $searchby;
	if($searchbox=="" || $searchby==""){
		echo "<script type=\"text/javascript\">
					alert(\"more information required.\"); 
				</script>";	
				header('location:searchUser.php');
	}else{
	
	$link = mysqli_connect("localhost","root","","oag") or die ("could not connect to server");
	mysqli_select_db($link,"oag") or die ("that database could not be found");
	if($searchby=="First Name"){
		$userquery = mysqli_query($link,"SELECT * FROM user where firstname = '$searchbox' AND usertype= 'User'") or die ("the query could not be completed, pls try again later");
	}
	else if($searchby=="Last Name"){
		$userquery = mysqli_query($link,"SELECT * FROM user where lastname = '$searchbox' AND usertype= 'User'") or die ("the query could not be completed, pls try again later");
	}
	else if($searchby =="Email"){
		$userquery = mysqli_query($link,"SELECT * FROM user where email = '$searchbox' AND usertype= 'User'") or die ("the query could not be completed, pls try again later");
	}
	else{
		$userquery = mysqli_query($link,"SELECT * FROM user where email = '$searchbox'AND usertype= 'User'") or die ("the query could not be completed, pls try again later");
	}
	
	if(mysqli_num_rows($userquery) != 1){
		//die ("that username could not be found");
		echo "<script type=\"text/javascript\">
					alert(\"No user Found.\"); 
				</script>";		
	}
	else{
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
}

?>

<html>
	<head>
		<title>User Profile</title>
		<link rel="stylesheet" href="css/indexstyle.css">
	</head>
	<body><div class="mainmenu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="painting.php">Painting</a></li>
				<li><a href="sculpture.php">Sculpture</a></li>
				<li><a href="photography.php">Photography</a></li>
				<li><a href="abstractArt.php">Abstract Art</a></li>
				<li><a href="artPrinting.php">Art Printing</a></li>
				<li><a href="artist.php">Artist</a></li>
				<li style="float:right"><a href="index.php">Log out</a></li>
				<li style="float:right"><a href="adminprofile.php">Profile</a></li>
				
			</ul>
		</div>
		<form action = "searchUser.php" method = "POST">
		<h1 style = "color:white;font-size:50px;margin-left:29%;color:black" >User Profile's Information</h1>
		<div id = "signupfrm">

				<p>
					<label>User ID :</label> <br>
					<input type = "text" id = "uname" name = "uname"  value = "<?php  echo $userid ?>" readonly />
				</p>
				<p>
					<label>First Name :</label> <br>
					<input type = "text" id = "uname" name = "uname"  value = "<?php  echo $firstname ?>" readonly />
				</p>
				<p>
					<label>Last Name :</label> <br>
					<input type = "text" id = "uname" name = "uname"  value = "<?php  echo $lastname ?>" readonly />
				</p>
				<p>
					<label>Email :</label><br>
					<input type = "text" id = "lastName" name = "email" value ="<?php  echo $email ?>" readonly />
				</p>
				
				<p>
					<label>Total Earnings :</label> <br>
					<input type = "text" id = "uname" name = "uname"  value = "<?php  echo $earning ?>" readonly />
				</p>
				
				<p>
					<label>Address :<label><br>
					<input type = "text" id = "email" name = "address" value = "<?php  echo $address ?> " readonly />
				</p>
				
				<p>
					<input type = "submit" name = "delete" value = "Delete this user"/>
					<input type = "submit" name = "searchagain" value = "Search Again"/>
				</p>
				
			</form>
		</div>
		
	</body>
</html>