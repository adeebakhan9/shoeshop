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
                <h2><i class="glyphicon glyphicon-info-sign"> </i> About Us Page Content</h2>

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
                   
	
                      <?php  foreach ($about_us as $about_us1 ){ ?>
        
            <form method="POST" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/about_us_update" enctype="multipart/form-data" >
             <div class="form-group col-sm-8">
			 
			  <label for="exampleInputPassword1">About Us Heading:</label>
							     
							<input type="text" name="heading"  class="form-control" value="<?php echo $about_us1['heading'];?>">
								
					  
                        <label for="exampleInputPassword1">About us Body</label>
                       		  <textarea id="datepicker" class="form-control" placeholder="" name="content" style="height:100px"><?php echo $about_us1['content']; ?></textarea> 
							 
							    
								  
							      
							
								 
						
					   </div>
                </div>
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