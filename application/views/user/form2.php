<div class="col-md-10"  id="form2">
                   
	
        
        
            <form method="POST" class="form-horizontal"  action="<?php echo base_url(); ?>/index.php/User/addRide" enctype="multipart/form-data" >
          <div class="form-group col-sm-10">
		        <h3>Price per co-traveller</h3>
	
              <div class="form-group col-sm-5">
			  
			   Lucknow --> Delhi
			   </br></br>
    <div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
      </div>
    
</div></div>
               
       

		       
				
		
				
				    <div class="form-group col-sm-10">
					 <h3> Number of seats offered:
</h3>

<div class="form-group col-sm-5">

    <div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
	 </div>
</div>
                    </div>
                    
                
                  
		            <div class="form-group col-sm-10">
					<h4>Options </h4>
			      
				   <div class="radio-inline">
                    <label>
           					              <input type="radio" name="tripType" id="optionsRadios3" value="1" >

                     Max. 2 in the back seat
                    </label>
					<br />Guarantee max. 2 people in the back of the car (preferred by co-travellers)
                </div>
                    </div>
				
                   
                      
		
                       <div class="form-group col-sm-8">
					    <h3>Ride details</h3>
                        <label for="exampleInputPassword1">Please add further details about your ride - it'll save you answering lots of questions from co-travellers.</label>
                       		  <textarea id="datepicker" class="form-control" placeholder="Please add further details about your ride - it'll save you answering lots of questions from co-travellers.Please add further details about your ride - it'll save you answering lots of questions from co-travellers." name="departureDate" style="height:100px"></textarea> 
							 
							      <br>
								   Please do not add your contact details here. Interested co-travellers will receive your phone number individually
								   <a href="#">(See our rules)</a><br />
								  <br>
								  
							       <label for="exampleInputPassword1">Maximum luggage size:</label>
							     
								 <select class="form-control" >
								 
								 <option>Small</option>
								 <option>Medium</option>
								 <option>Big</option>
								 
								 </select>
								 <br />
								   
							       <label for="exampleInputPassword1">I will leave:</label>
							     
								 <select class="form-control" >
								 
								 <option>Right on Time</option>
								 <option>In a 15 minute window</option>
								 <option>In a 30 minute window</option>
								 <option>In a 1 hour window</option>
								 <option>In a 2 minute window</option>
								 </select>
								 <br />
								   
							       <label for="exampleInputPassword1">I can make a detour:</label>
							    
								 <select class="form-control" >
								 <option>I'm not willing to make a detour</option>
								 <option>15 min detour max</option>
								 <option>30 min detour max</option>
								 <option>Anything is fine</option>
								 
								 </select>
								 
						
					   </div>
                   

                       
                   
                
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                       
                        <button class="btn btn-primary" name="update_traveller" type="submit" id="">Add</button>
              
                    </div>
                </div>
            </form>
			
         
      </div>