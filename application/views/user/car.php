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
                <h2><i class="glyphicon glyphicon-info-sign"> </i> Your car details</h2>

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
                <div class="col-md-10" id="divOne">
                   
	
                      
        
            <form method="POST" class="form-horizontal"  action="" enctype="multipart/form-data" >
                    
                   
                   
             
              
           
                <div class="form-group">

                    <div class="col-sm-10">Give details about your car and increase your chances of getting co-travellers.
                      
                    </div>
                </div>
              
                 <div class="form-group">
           
 <?php               
if($carCheck >0){ ?>
 <div class="col-sm-10"> <button class="btn btn-primary" id="add" type="submit">Update a Car</button>
                      
                    </div>

<?php } 
else{ ?>
 <div class="col-sm-10"> <button class="btn btn-primary" id="add" type="submit">Add a Car</button>
                      
                    </div>

<?php }?>
                   
					
                </div>
                <div class="hr-line-dashed"></div>
                
             
            </form>
           
      </div>
      
     
               <div class="col-md-10" id="divTwo" style="display:none">
                   
	
                    
        
            <form method="POST" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/User/addCar/<?php echo $_SESSION['user_id']; ?>" enctype="multipart/form-data" >
                    
                   
                   
                <div class="form-group"><label class="col-sm-2 control-label">Make</label>

                    <div class="col-sm-10"><input type="text" value="" class="form-control input-sm" name="carName">
                      
                    </div>
                </div>
                
                  
                <div class="form-group"><label class="col-sm-2 control-label">Model</label>

                    <div class="col-sm-10"><input type="text" value="" class="form-control input-sm" name="model">
                      
                    </div>
                </div>
                   
              
			<div class="form-group"><label class="col-sm-2 control-label"> Comfort*</label>
			
			<div class="col-sm-10">
			<select class="form-control m-b" name="comfort" >
			<option value="Basic">Basic</option>
			<option value="Normal">Normal</option>
			<option value="Comfortable">Comfortable</option>
			<option value="Luxury">Luxury</option>
			</select>
			</div>
			</div>
			
			<div class="form-group"><label class="col-sm-2 control-label"> Number of seats</label>
			
			<div class="col-sm-10">
			<select class="form-control m-b" name="seats" >
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			</select>
			</div>
			</div>

                   
              
                   
                <div class="form-group"><label class="col-sm-2 control-label">Colour</label>

                    <div class="col-sm-10"><input type="text" value="" class="form-control input-sm" name="color">
                      
                    </div>
                </div>
                  
                  
               
                        <div class="form-group"><label class="col-sm-2 control-label"> Type</label>
			
			<div class="col-sm-10">
			<select class="form-control m-b" name="type" >
			<option value="Sedan">Sedan</option>
			<option value="Hatchback">Hatchback</option>
			<option value="Convertible">Convertible</option>
			<option value="Estate">Estate</option>
			<option value="SUV">SUV</option>
			<option value="Minivan">Minivan</option>
			<option value="Van">Van</option>
			</select>
			</div>
			</div>
              
              
              	 <div class="form-group"><label class="col-sm-2 control-label">Image </label>

                    <div class="col-sm-10"><input type="file" value="" class="form-control input-sm" name="image">
                      
                    </div>
                </div>   
                
                <div class="hr-line-dashed"></div>
                
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                       
                        <button class="btn btn-primary" name="update_traveller" type="submit">Save</button>
                       
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
		
		
		<script>
		
		
		$(document).ready(function(){
		
		$("#add").click(function(a){
		a.preventDefault();
	        $("#divOne").hide();
	        
		$("#divTwo").show();
		
		});
		
		});
		
</script>
        