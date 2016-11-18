<noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
          <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"> </i> Inbox</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <br />
            
            <div class="box-content row">
                <div class="col-md-12">
               
          <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
  
    <tbody>
    
       <?php foreach($msg as $msg1) { ?>
	  
		 
	   
	<tr>
	<td><?php 
	$query2=$this->db->query("select user.images from user where id='".$msg1['msg_from']."'");
		 $result=$query2->result_array();
	 foreach($result as $result1){ ?>
	<img src="<?php echo base_url();?>upload/profilePic/<?php echo $result1['images'];?>" style="width:50px; height:50px" />
	<?php } ?>
	
	</td>
		<td>
	<h5>Header :<?php echo $msg1['header']?> </h5>
		
		
		</td>
		<td class="center"><span><a href="<?php echo base_url();?>/index.php/User/conversation/<?php echo $msg1['id']; 
		?>/<?php 
		
		if($_SESSION['user_id']==$msg1['msg_from']){ 
		
		echo $msg1['msg_to'];
		
		 }
		
		
		 else {
		  echo $msg1['msg_from'];
		  
		   }  ?> ">View </a></span></td>
		   
		</tr>
   
    <?php } ?>
		
  
    </tbody>
    </table>
	
	
               </div>  </div>
        </div>
    </div>
</div>


    <hr>
   

  