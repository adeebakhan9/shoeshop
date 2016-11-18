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
                <h2><i class="glyphicon glyphicon-info-sign"> </i> Your postal address</h2>

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
                   
	
                              
            <form method="POST" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/User/updatePostalAaddress/64" enctype="multipart/form-data" >
                    
                   
                   <?php foreach ($val as $val1) {?>
                <div class="form-group"><label class="col-sm-2 control-label">First Name</label>

                    <div class="col-sm-10"><?php echo $val1['first_name']; ?>                   
                    </div>
                </div>
                
                <div class="form-group"><label class="col-sm-2 control-label">Last Name</label>

                    <div class="col-sm-10"><?php echo $val1['last_name']; ?>                       
                    </div>
                </div>
               
                  <div class="form-group"><label class="col-sm-2 control-label"></label>

                    <div class="col-sm-10">Change your first and last name from <a href="<?php echo base_url();?>index.php/User" > Edit Profile</a>
                      
                    </div>
                </div>
				
				  
                      
                <div class="form-group"><label class="col-sm-2 control-label">Address </label>

                    <div class="col-sm-10"><input type="text" value="<?php echo $val1['location']; ?> " class="form-control input-sm" name="address">
                      
                    </div>
                </div>
                
             
              
                                
                <div class="form-group"><label class="col-sm-2 control-label">Country </label>

                    <div class="col-sm-10"><input type="text" value="<?php echo $val1['country']; ?> " class="form-control input-sm" name="country">
                      
                    </div>
                </div>
                
             
        
				
				
				 <div class="form-group"><label class="col-sm-2 control-label">State </label>

                    <div class="col-sm-10"><input type="text" value="<?php echo $val1['state']; ?> " class="form-control input-sm" name="state">
                      
                    </div>
                </div>
             
                                
                <div class="form-group"><label class="col-sm-2 control-label">City </label>

                    <div class="col-sm-10"><input type="text" value="<?php echo $val1['city']; ?>" class="form-control input-sm" name="city">
                      
                    </div>
                </div>
                
             
               
                  
				
				
				 <div class="form-group"><label class="col-sm-2 control-label">Zip Code </label>

                    <div class="col-sm-10"><input type="text" value="<?php echo $val1['pincode']; ?>" class="form-control input-sm" name="pincode">
                      
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
				<?php } ?>
            </form>
                  </div>
               
            </div>
        </div>
    </div>
</div>


    <hr>
   