<br></br>
<div class="content-box">
<div class="row">
  <div class="col">
    <h4>Upload Photos</h4>
  </div>
  <div class="col">

  </div>
</div>
<br>
 
<?php
$msg = ""; 

// If upload button is clicked ... 
if (isset($_POST['upload'])) { 

	$filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];	 
		$folder = "../assets/images/".$filename; 
		
	$db = mysqli_connect("localhost", "root", "", "kashmir_db"); 

		// Get all the submitted data from the form 
		$sql = "INSERT INTO 'photo-gallery' (filename) VALUES ('$filename')"; 

		// Execute query 
		mysqli_query($db, $sql); 
		
		// Now let's move the uploaded image into the folder: image 
		if (move_uploaded_file($tempname, $folder)) { 
			$msg = "Image uploaded successfully"; 
		}else{ 
			$msg = "Failed to upload image"; 
	} 
} 
$result = mysqli_query($db, "SELECT * FROM 'photo-gallery'"); 
?> 


<div id="content"> 

<form method="POST" action="" enctype="multipart/form-data"> 
	<input type="file" name="uploadfile" value=""/> 
		
	<div> 
		<button type="submit" name="upload">UPLOAD</button> 
		</div> 
</form> 
</div> 

