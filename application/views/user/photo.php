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
                <h2><i class="glyphicon glyphicon-info-sign"> </i> Your Profile Photo</h2>

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
            
            <div class="box-content row"  >
                <div class="col-md-10">
                   
	
                      <?php foreach ($val as $val1 ){ ?>
        
            <form method="POST" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/User/updatePhoto/<?php echo $val1['id'] ; ?>" enctype="multipart/form-data" >
                    
                   	 <div class="form-group"><label class="col-sm-2 control-label">Your Profile Pic</label>

                    <div class="col-sm-10"> <img src="<?php echo base_url(); ?>upload/profilePic/<?php echo $val1['images']; ?>" style="width:150px"/>
                      
                    </div>
                </div> 
                   
               
            
                      	
				 <div class="form-group"><label class="col-sm-2 control-label">Image </label>

                    <div class="col-sm-10"><input type="file" value="" class="form-control input-sm" name="images">
                      PNG, JPG or GIF, max. 3MB
                    </div>
                </div>    
                      
               
             
            

                
            <!--   <div class="form-group"><label class="col-sm-2 control-label">Gender</label>

                    <div class="col-sm-10"><input type="radio" checked>Male  <input type="radio">Female
                      
                    </div>
                </div> -->

              
                
                <div class="hr-line-dashed"></div>
                
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                       
                        <button class="btn btn-primary" name="update_traveller" type="submit">Update</button>
                       
                    </div>
                </div>
            </form>
            <?php  } ?>
      </div>
               
            </div>
        </div>
    </div>
</div>


    <hr>