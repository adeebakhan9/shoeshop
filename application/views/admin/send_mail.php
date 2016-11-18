<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery-ui.css">
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
           <a href="#"> <h3>Offer a ride on your next long journey </h3></a>
        </li>
    </ul>
</div>
<div class=" row">
    
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner"><br />
            
            <div class="box-content row"  >
                <div class="col-md-12">
   
   
                   

        
		
		
        
            <form method="POST" class="form-horizontal"  action="<?php echo base_url(); ?>/index.php/User/addRide" enctype="multipart/form-data" >
           <div class="setup-content" id="step-1">
		        <h3>Send Mail</h3>
				
	         <?php foreach($user as $val) {?>
			 
                <div class="radio-inline">
				
                    <label>
                     <input type="checkbox" name="email[]" value="<?php echo $val['email']; ?>" >
                     <?php echo $val['first_name'];?> <?php echo $val['last_name'];?>
                    </label>
					
                </div>
				
				   <?php } ?>
				   
					<div class="form-group col-sm-8">
					
					<label for="exampleInputPassword1">Subject:</label>
					<input type="text" name="subject"  class="form-control" value="" >
					
				    <label for="exampleInputPassword1">Message</label>
					<textarea id="datepicker" class="form-control" placeholder="" name="message" style="height:100px" ></textarea> 
					</div>
					
                </div>
				
				<div class="col-sm-8 col-sm-offset-2">
						<button class="btn btn-primary" name="update_traveller" type="submit">Send</button>
                       
				</div>
	           </form>
			
         
      </div>
               
            </div>
      </div>
    </div>
</div>


    <hr>
	
