<style>
.border-right {
    border-right: 3px solid black;
}
.galleryscroll{
	margin:4px, 4px; 
	padding:4px; 
	background-color: gray; 
	width: 100%; 
	height: 300px; 
	overflow-x: hidden; 
	overflow-y: auto; 
	text-align:justify; 
}
</style>
<div class="container">
    <br><br><div style="background:gray;color:white;height:40px;"><center><h3>Gallery Setting</h3></center></div>
	<div class="row">
		<div class="col-md-4 border-right">
		<br><h3>Add Gallery</h3><br><br>
			    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
				<script>
				$(document).ready(function() 
				{ 
				 $('form').ajaxForm(function() 
				 {
				  alert("Uploaded SuccessFully");
				 }); 
				});

				function preview_image() 
				{
				 var total_file=document.getElementById("upload_file").files.length;
				 for(var i=0;i<total_file;i++)
				 {
				  $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' height='100px' width='100px'><br>");
				 }
				}
				</script>
				</head>
				<div id="wrapper">
				 <form action="k-actions.php" method="POST" enctype="multipart/form-data">
				  <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>
				  <input type="submit" name='submit_image' value="Upload Image"/>
				 </form>
				 <div id="image_preview"></div>
				</div>
        </div>
		<div class="col-md-8">
		    <center><br><h3>Updated Gallery</h3></center><br>
			<div class="galleryscroll">
			
			 <?php
			  $last_upload_date=mysqli_query($conn,"SELECT DISTINCT uploaded_date FROM gallery ORDER BY id DESC");
			  while($uploaded_date=mysqli_fetch_array($last_upload_date)){
				  $key_date=$uploaded_date['uploaded_date'];
				echo "<br><br>";
				echo "<center><p style='color:white'>............".$uploaded_date['uploaded_date']."...............</p></center>";
				echo "<br>";
			  
			  $query="SELECT imageName FROM gallery WHERE uploaded_date='$key_date' ORDER BY id DESC";
			  $data=mysqli_query($conn,$query);
			  while($ress=mysqli_fetch_array( $data )){ 
			  ?>
				  
				  <img src="<?php echo 'gallery_images/'.$ress['imageName'];?>" width="300px" height="250px">
				 
			  <?php }
			  } ?>
			
			</div>
        </div>
    </div><br><br>
</div>
