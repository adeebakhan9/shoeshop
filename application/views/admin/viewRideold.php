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
                <h2><i class="glyphicon glyphicon-info-sign"> </i> Ride Details</h2>

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
                <div class="form-group" ><label class="col-sm-3 control-label"> Name</label>
				
                             <span class="col-sm-2 control-label"><?php echo $val1['user_id']; ?>                   
                             </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">From</label>
                              <span class="col-sm-2 control-label"><?php echo $val1['departure']; ?>
							  </span>
                    
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">To</label>

                  <span class="col-sm-2 control-label"><?php echo $val1['arrival']; ?>                   
                       </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Stops</label>

                    <span class="col-sm-2 control-label"><?php echo $val1['stops']; ?>                   
                        </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Departure Date and Time</label>

                   <span class="col-sm-2 control-label"><?php echo $val1['departureDate']; ?> </span> , <span class="col-sm-2 control-label"><?php echo $val1['departureTime']; ?>                   
                        </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Arrival Date and Time</label>

                   <span class="col-sm-2 control-label"><?php echo $val1['arrivalDate']; ?> </span><span class="col-sm-2 control-label"><?php echo $val1['arrivalTime']; ?>                    
                      </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Trip type</label>

                 <span class="col-sm-2 control-label"><?php echo $val1['tripType']; ?>                   
                      </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Travel Cost</label>

                    <span class="col-sm-2 control-label"><?php echo $val1['travelCost']; ?>                   
                       </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Details</label>

                   <span class="col-sm-2 control-label"><?php echo $val1['rideDetails']; ?>                   
                        </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Luggage</label>

                   <span class="col-sm-2 control-label"><?php echo $val1['luggageSize']; ?>                   
                       </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Seat Offered</label>

                   <span class="col-sm-2 control-label"><?php echo $val1['seatOffered']; ?>                   
                      </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Price per Traveller</label>

                   <span class="col-sm-2 control-label"><?php echo $val1['pricePerCoTraveller']; ?>                   
                      </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Back Seat</label>

                    <span class="col-sm-2 control-label"><?php echo $val1['backSeat']; ?> </div>
                    </span>
				<div class="form-group"><label class="col-sm-3 control-label">Leaving at</label>

                   <span class="col-sm-2 control-label"><?php echo $val1['leavingAt']; ?>                   
                       </span>
                </div>
				<div class="form-group"><label class="col-sm-3 control-label">Detour of</label>

                    <span class="col-sm-2 control-label"><?php echo $val1['detour']; ?>                   
                  </span>
                </div>
                
               <?php } ?>
            </form>
                  </div>
               
            </div>
        </div>
    </div>
</div>


    <hr>
   