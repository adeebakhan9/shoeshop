

<?php foreach($msg as $msg1) { ?>
<tr style="border-bottom:#CCCCCC solid 2px">
	
	<td style="width:150px; padding:10px; color:#0099CC"><?php
	$query=$this->db->query("select user.images,user.first_name,user.last_name from user where id='".$msg1['msg_from']."'");
	$result=$query->result_array();
	
	 foreach($result as $result1){ ?>
	<?php echo $result1['first_name']; ?> &nbsp; &nbsp;<?php echo $result1['last_name']; ?><br /><img src="<?php echo base_url();?>upload/profilePic/<?php echo $result1['images'];?>" style="width:50px; height:50px" />
	
	<?php }?></td>
	
		<td>
	<?php echo $msg1['msg']; ?>
	
	</td>
	</tr>
		 <?php } ?>
