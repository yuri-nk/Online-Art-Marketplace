<html>
<head>
	<title><?php echo $username; ?>'s Profile</title>

</head>
<body>
<?php
//check if forms have been submitted

if(isset($_POST['adminLogin'])){
	$username = $_POST['username'];
	echo "$username";
	$password = $_POST['password']; 
	$link = mysqli_connect("localhost","root","","art_gallery") or die ("could not connect to server");
	mysqli_select_db($link,"art_gallery") or die ("that database could not be found");
	$userquery = mysqli_query($link,"SELECT * FROM admin WHERE username='$username'") or die ("the query could not be completed, pls try again later");
	if(mysqli_num_rows($userquery) != 1){
		die ("that username could not be found");	
	}
	while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
	}
	
	if($username != $dbusername || $password != $dbpassword){
		die("there has been a fatal error, pls try again");
	} 
	header("Location: adminProfile.php");
	
} else if($_POST['forgetPassword']){
	header("Location: forgetPassword.php");
}


else die("you need to specify a username")	

?>
</body>
</html>