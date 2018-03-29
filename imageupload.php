<?php 

 $ownerid="";
 $link = mysqli_connect("localhost","root","","oag") or die ("could not connect to server");
mysqli_select_db($link,"oag") or die ("that database could not be found");
$userquery = mysqli_query($link,"SELECT * FROM currentuser where currentid = 1") or die ("the query could not be completed, pls try again later");
$ownerid = "";
if(mysqli_num_rows($userquery) != 1){
	die ("that username could not be found");	
}else{
	while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
	$ownerid = $row['userid'];
	}
}
 $connect = mysqli_connect("localhost", "root", "", "oag");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
	  $catagory = htmlspecialchars($_POST['catagoryname']);
	  $price = htmlspecialchars($_POST['price']);
	  $tags = htmlspecialchars($_POST['tags']);
	  echo $catagory;
      $query = "INSERT INTO image(image,catagoryname,price,ownerid,tags) VALUES ('$file','$catagory','$price','$ownerid','$tags')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>The Online Art Marketplace</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   <link rel="stylesheet" href="css/indexstyle.css">
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
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">The Online Art Marketplace</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
				<label>Add Catagory</label>
				<select name="catagoryname">
					<option value="" name ="">''</option>
				  <option value="painting" name ="painting">Painting</option>
				  <option value="sculpture" name = "sculpture" >Sculpture</option>
				  <option value="photography" name = "photography" >Photography</option>
				  <option value="abstractart" name = "abstractart" >Abstract Art</option>
				</select>
				<label>Add Price</label>
				<input type = "text" name ="price">
				
				<label>Add tags</label>
				<input type = "text" name ="tags">
				
				 <input type="file" name="image" id="image" />  
				 <br />  
				 <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
				
				</form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr> 
                <?php  
                $query = "SELECT image FROM image where ownerid='$ownerid'";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="300" width="350" class="img-thumnail" />  
                               </td>  
							   
                          </tr>  
                     ';  
					 
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '' )  
           {  
                alert("Please Select Image");  
                return false;  
           } 
			
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>