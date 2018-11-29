<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "locationvoiture");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
	 for($x=0; $x<count($_FILES['image']['tmp_name']); $x++ ) {
  	      $image = $_FILES['image']['name'][$x];
		    /*$file_name = $_FILES['image']['name'][$x];
            $file_size = $_FILES['image']['size'][$x];
            $file_tmp  = $_FILES['image']['tmp_name'][$x];*/
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);
    if($x==0){
  	$sql = "INSERT INTO images (images1) VALUES ('$image')";
	}else if($x==1){
		$sql="SELECT id FROM images ORDER BY id DESC LIMIT 1";
		if($result = mysqli_query($db, $sql)){
	 if(mysqli_num_rows($result) > 0){
		  while($row = mysqli_fetch_array($result)){
			  $id=$row['id'];
		$sql = "UPDATE images SET images2='$image' WHERE id=".$id."";
		}}}
	}else{
		$sql="SELECT id FROM images ORDER BY id DESC LIMIT 1";
		if($result = mysqli_query($db, $sql)){
	 if(mysqli_num_rows($result) > 0){
		  while($row = mysqli_fetch_array($result)){
			  $id=$row['id'];
		$sql = "UPDATE images SET images3='$image' WHERE id=".$id."";
		}}}
	}
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'][$x], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
	 }}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['images1']."' >";
      	//echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="#" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	 	 <td rowspan="1">
    <input type="file" id="upload" name="image[]">
</td>
<td rowspan="1">
    <input type="file" id="upload" name="image[]">
</td>
<td rowspan="1">
    <input type="file" id="upload" name="image[]">
</td>
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>