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
                   
	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
  
    <tbody>
       <?php foreach ($val as $val1) {?>
       
		<tr>
		<td><strong>Name</strong></td>
		<td class="center"><?php echo $val1['user_id']; ?> </td>
		</tr>
   
        <tr>
		<td><strong>From</strong></td>
		<td class="center"><?php echo $val1['departure']; ?> </td>
		</tr>
		<tr>
		<td><strong>To</strong></td>
		<td class="center"><?php echo $val1['arrival']; ?> </td>
		</tr>
		<tr>
		<td><strong>Stops</strong></td>
		<td class="center"><?php echo $val1['stops']; ?> </td>
		</tr>
		<tr>
		<td><strong>Departure Date and Time</strong></td>
		<td class="center"><?php echo $val1['departureDate']; ?> </td>
		</tr>
		<tr>
		<td><strong>Arrival Date and Time</strong></td>
		<td class="center"><?php echo $val1['arrivalDate']; ?> </td>
		</tr>
		<tr>
		<td><strong>Trip type</strong></td>
		<td class="center"><?php echo $val1['tripType']; ?> </td>
		</tr>
		<tr>
		<td><strong>Travel Cost</strong></td>
		<td class="center"><?php echo $val1['travelCost']; ?> </td>
		</tr>
		<tr>
		<td><strong>Details</strong></td>
		<td class="center"><?php echo $val1['rideDetails']; ?> </td>
		</tr>
		<tr>
		<td><strong>Luggage</strong></td>
		<td class="center"><?php 
		  if ($val1['luggageSize']==0){ ?>
												   
												   Small
												   
												 <?php   }
												 
												  elseif($val1['luggageSize']==1){ ?>
												  
												  
												   Medium
												   
												<?php    }
												
												   else{ ?>
												   
												   Large
												   
												  <?php  }
		 ?> </td>
		</tr>
		<tr>
		<td><strong>Seat Offered</strong></td>
		<td class="center"><?php echo $val1['seatOffered']; ?> </td>
		</tr>
		<tr>
		<td><strong>Price per Traveller</strong></td>
		<td class="center"><?php echo $val1['pricePerCoTraveller']; ?> </td>
		</tr>
		
  <tr>
		<td><strong>Back Seat</strong></td>
		<td class="center"><?php echo $val1['backSeat']; ?> </td>
		</tr>
		<tr>
		<td><strong>Leaving at</strong></td>
		<td class="center"><?php  if ($val1['leavingAt']==0){ ?>
												   
												  Right on Time
												   
												 <?php   }
												 
												  elseif($val1['leavingAt']==1){ ?>
												  
												  
												   In a 15 minute window
												   
												
												   
												 <?php   }
												 
												  elseif($val1['leavingAt']==2){ ?>
												  
												  
												   In a 30 minute window
												   
												<?php    }
												
												elseif($val1['leavingAt']==3){ ?>
												  
												  
												   In a 1 hour window
												   
												<?php    }
												
												   else{ ?>
												   
												  In a 2 minute window
												   
												  <?php  } ?> </td>
		</tr>
		<tr>
		<td><strong>Detour of</strong></td>
		<td class="center"><?php   if ($val1['detour']==1){ ?>
												   
												  not willing to make a detour
												   
												 <?php   }
												 
												  elseif($val1['detour']==2){ ?>
												  
												  
												   15 min detour max
												   
												
												   
												 <?php   }
												 
												  elseif($val1['detour']==3){ ?>
												  
												  
												   30 min detour max
												   
												<?php    }
												
												else { ?>
												  
												  
												  Anything is fine
												   
												<?php    } ?> </td>
		</tr>
		    <?php } ?>
    </tbody>
    </table>
                              
            
                  </div>
               
            </div>
        </div>
    </div>
</div>


    <hr>
   