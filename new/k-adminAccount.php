<br><br><div style="background:gray;color:white;height:40px;"><center><h3>Account Setting</h3></center></div><br><br>
<center><table class="UserTable table" style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;margin-top: auto;margin-left:-10px">

        <thead>

			<tr style="border-collapse: collapse;text-align: center;margin-top:0px; padding: 0px;background:#0073aa">

			  <th>No</th>
			  <th >email</th>
			  <th >Password</th>
			   <th >Role</th>
			  <th >Action</th>
			  

			</tr>

		</thead>
		 <?php
		$query="SELECT *FROM users WHERE role='admin'";
		$userData=mysqli_query($conn,$query);
		while($user=mysqli_fetch_array($userData)){
			?>
		<form action="k-actions.php" method="POST">
        <tr style="border: 1px solid #dddddd;text-align: left; padding: 8px;">

          <td style="border: 1px solid #dddddd;text-align: center; padding: 8px;word-wrap: break-word; color:black">

            <input type="text" value="<?php echo $user['id'];?>" name="id" readonly>

          </td>

          <td style="border: 1px solid #dddddd;text-align: center; padding: 8px;word-wrap: break-word;margin-left:0px;color:black">
		  
           <input type="text" value="<?php echo $user['login'];?>" name="login">
          </td>
		  <td style="border: 1px solid #dddddd;text-align: center; padding: 8px;word-wrap: break-word;margin-left:0px;color:black">
		  
           <input type="text" value="<?php echo $user['password'];?>" name="pass">
          </td>
		  <td style="border: 1px solid #dddddd;text-align: center; padding: 8px;word-wrap: break-word;margin-left:0px;color:black">
		  
           <input type="text" value="<?php echo $user['role'];?>" name="role" readonly>
          </td>

          <td style="border: 1px solid #dddddd;text-align: center; padding: 8px;word-wrap: break-word;color:black">

            <input type="submit" class="btn viewBtn" name="updateUserDetails" value="update">
          </td>

         

          </td>
		  </tr>
		  </form>
		<?php } ?>
		</table></center>