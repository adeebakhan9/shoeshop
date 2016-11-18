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
               
          <table>
  
    <tbody id="beforajax">
    
       <?php foreach($msg as $msg1) { ?>
	<tr style="border-bottom:#CCCCCC solid 1px">
	<td style="width:150px; padding:10px; color:#0099CC"><?php
	$query=$this->db->query("select user.images,user.first_name,user.last_name from user where id='".$msg1['msg_from']."'");
	$result=$query->result_array();
	
	 foreach($result as $result1){ ?>
	<?php echo $result1['first_name']; ?> &nbsp;<?php echo $result1['last_name']; ?><br /><img src="<?php echo base_url();?>upload/profilePic/<?php echo $result1['images'];?>" style="width:50px; height:50px" />
	
	<?php }?></td>
	
		<td>
	<?php echo $msg1['msg']; ?>
	
	    </td>
		
		
		</tr>

    <?php } ?>
		  
  
    </tbody >
	
	  <tbody id="afterajax" style="display:none">
    
    
    </tbody>
    </table>
	<br />
	<form method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    
                   
                   
                <div class="form-group"><label class="col-sm-2 control-label">Reply</label>

                    <div class="col-sm-10"><input type="text" value="" id="msg" class="form-control input-sm" name="msg">
                      <input type="hidden" value="<?php echo $this->uri->segment(4); ?>" id="msg_to" name="msg_to">
					  <input type="hidden" value="<?php echo $this->uri->segment(3); ?>" id="msg_id" name="msg_id">
                    </div>
                </div>
                
                

              
                
                <div class="hr-line-dashed"></div>
                
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                       
                        <button class="btn btn-primary" id="reply" name="update_traveller" type="submit">Reply</button>
                       
                    </div>
                </div>
            </form>
	
               </div> 
			   
			    </div>
        </div>
    </div>
</div>


    <hr>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

	<script>
	
	
	$(document).ready(function(){
	
	
    $("#reply").click(function(a){
   a.preventDefault();
    //alert("satya");
     var msg=$("#msg").val();
	 
    var msg_to=$("#msg_to").val();
	 var msg_id=$("#msg_id").val();
	 // var depDate=$(".depDate").val();
 alert(msg_to);
 //alert(from);
           
   $.ajax({
           
           
           type:"POST",
           url:"http://localhost/autosharing//index.php/User/reply" ,
            data: {
            'msg':msg,
			'msg_to':msg_to,
			'msg_id':msg_id
			  
			  
			  
			  
        },
           success:function(satya){
			   alert("success");
			//   alert(specialization);
         $("#beforajax").hide();
		 $("#afterajax").show();
         $("#afterajax").html(satya);
           
          
           }
           
           
           
           
           
           
           
           
           });
  
    });
});
	
	
	  </script>