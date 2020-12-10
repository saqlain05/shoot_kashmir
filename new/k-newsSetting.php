<br><br><div style="background:gray;color:white;height:40px;"><center><h3>Current News</h3></center></div><br><br>
<center><table class="UserTable table" style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;margin-top: auto;margin-left:-10px">

        <thead>

			<tr style="border-collapse: collapse;text-align: center;margin-top:0px; padding: 0px;background:#0073aa">

			  <th>No</th>
			  <th >News</th>
			  <th >Edit</th>
			   <th >Update date</th>
			  <th >Delete</th>
			  

			</tr>

		</thead>




       <?php for($i=0;$i<10;$i++){
		   $key=$i+1;
		   $news_query="SELECT *FROM news_data WHERE id='$key' ORDER BY id DESC";
		   $news_data=mysqli_query($conn,$news_query);
		   while($news=mysqli_fetch_array($news_data)){
		   ?>
        <form action="k-actions.php" method="POST">
        <tr style="border: 1px solid #dddddd;text-align: left; padding: 8px;">

          <td style="border: 1px solid #dddddd;text-align: center; padding: 8px;word-wrap: break-word; color:black">

            <input type="text" value="<?php echo $news['id'];?>" name="id" readonly>

          </td>

          <td style="border: 1px solid #dddddd;text-align: center; padding: 8px;word-wrap: break-word;margin-left:0px;color:black">
		  
           <input type="text" value="<?php echo $news['news'];?>" name="news">
          </td>
		  <td style="border: 1px solid #dddddd;text-align: center; padding: 8px;word-wrap: break-word;margin-left:0px;color:black">
		  
           <input type="text" value="<?php echo $news['update_date'];?>" name="date">
          </td>

          <td style="border: 1px solid #dddddd;text-align: center; padding: 8px;word-wrap: break-word;color:black">

            <input type="submit" class="btn viewBtn" name="updateNews" value="update">
          </td>

         <td style="border: 1px solid #dddddd;text-align: center; padding:  8px;word-wrap: break-word;">

            <a type="btn" class="btn declineBtn" href="adminActions.php?=<?php echo $i;?>" id="bdecline">

              <span id="sdecline" style="color:white;">Delete</span>

            </a>

          </td>
		  </tr>
		  </form>
	   <?php }} ?>
    </table></center>