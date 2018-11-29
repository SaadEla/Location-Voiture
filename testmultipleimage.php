<html>
<head>
<title>TEST</title>
</head>
<body>
<form method="POST" action="executionmultipleimage.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	 
	 <td rowspan="1">
    <input type="file" id="upload" name="images1[]">
</td>
<td rowspan="1">
    <input type="file" id="upload" name="images1[]">
</td>
<td rowspan="1">
    <input type="file" id="upload" name="images1[]">
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
		
		</body>
		</form>