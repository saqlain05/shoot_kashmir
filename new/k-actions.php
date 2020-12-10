<?php
session_start();
include_once('k-conn.php');
if(isset($_POST['login'])){
	$user_id=$_POST['logId'];
	$user_pass=$_POST['logPass'];
	$query="SELECT * FROM users WHERE login='$user_id' AND password='$user_pass'";
	if(count(mysqli_fetch_array(mysqli_query($conn,$query)))!=0){
		unset($_SESSION['admin_login']);
		$_SESSION['admin_login']=2;
		header('Location:k-admin.php');
	}else{
		unset($_SESSION['admin_login']);
		$_SESSION['admin_login']=-1;
		header("Location: {$_SERVER['HTTP_REFERER']}");
	}
}


// add gallery
if(isset($_POST['submit_image']))
{

for($i=0;$i<count($_FILES["upload_file"]["name"]);$i++)
{
	
 $uploadfile=$_FILES["upload_file"]["tmp_name"][$i];
 $imgname=$_FILES["upload_file"]["name"][$i];
 $folder="gallery_images/";
 if(move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "$folder".$_FILES["upload_file"]["name"][$i])){
	 $current_date=date("Y-m-d");
	 $query="INSERT INTO gallery(imageName,uploaded_date) VALUES ('$imgname','$current_date')";
	 mysqli_query($conn,$query);
		
}
}

header("Location: {$_SERVER['HTTP_REFERER']}");
exit();

}

//update news

if(isset($_POST['updateNews'])){
	$id=$_POST['id'];
	$news=$_POST['news'];
	$update_date=date("Y-m-d");
	$query="UPDATE news_data SET news='$news',update_date='$update_date' WHERE id='$id'";
	if(mysqli_query($conn,$query)){
		header("Location: {$_SERVER['HTTP_REFERER']}");
	}else{
		echo "somthing went wrong";
	}
}

//update user account
if(isset($_POST['updateUserDetails'])){
	$id=$_POST['id'];
	$login=$_POST['login'];
	$pass=$_POST['pass'];
	$query="UPDATE users SET login='$login',password='$pass' WHERE id='$id'";
	if(mysqli_query($conn,$query)){
		header("Location: {$_SERVER['HTTP_REFERER']}");
	}else{
		echo "somthing went wrong";
	}
}
?>