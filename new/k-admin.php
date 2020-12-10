<?php
session_start();
include_once('k-conn.php');
if($_SESSION['admin_login']==null){
	echo "error";
	exit;
}else{

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daily Wallet</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
<style>

	.UserTable tr th{

		font-size:18px;

		font-weight:500;

		color:#fff;

		padding:8px;

	}

	.viewBtn{

		background: #038e54;

		color: white;

		border: 0;

		padding: 5px 18px;

		cursor:pointer;

	}

	.declineBtn{

		background: #d43838;

		color: white;

		border: 0;

		padding: 5px 18px;

		cursor:pointer;

	}

</style>
<center>
 <button type="submit" onclick="adminOption1()" class="btn btn-primary mt-3 btt1">Gallery Setting</button>
 <button type="submit" onclick="adminOption2()" class="btn btn-primary mt-3 btt1">News Setting</button>
 <button type="submit" onclick="adminOption3()" class="btn btn-primary mt-3 btt1">Admin Account</button>
</center>


<section  id="gallery" >
 <?php include_once('k-gallery.php');?>
</section>
<section id="newsSetting" style="display:none">
  <?php include_once('k-newsSetting.php');?>
</section>
<section id="adminAccount" style="display:none">
  <?php include_once('k-adminAccount.php');?>
</section>
<script>
var span = document.getElementsByClassName("close")[0];



// When the user clicks the button, open the modal 

 function positionedPopup(x) {

	 var view=x-1;



	 var div = document.getElementById("myModal").querySelectorAll(".modal-content");

  div[view].style.display = "block";

}



// When the user clicks on 

          

function removeView(a) {

     var remove=a-1;

	 var close = document.getElementById("myModal").querySelectorAll(".modal-content");

  close[remove].style.display = "none";

}



function adminOption1(){
 document.getElementById("gallery").style.display="block";
 document.getElementById("newsSetting").style.display="none";
 document.getElementById("adminAccount").style.display="none";
}
function adminOption2(){
 document.getElementById("gallery").style.display="none";
 document.getElementById("newsSetting").style.display="block";
 document.getElementById("adminAccount").style.display="none";
}
function adminOption3(){
 document.getElementById("gallery").style.display="none";
 document.getElementById("newsSetting").style.display="none";
 document.getElementById("adminAccount").style.display="block";
}
</script>

</html
<?php }?>