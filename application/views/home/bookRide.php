
<style>
.ridedetailsSpanLeft{
float:left;
 padding:7px;
 font-size:15px;

}
.ridedetailsSpanRight{
float:right;
 padding:7px;

}
.carOwnerspanLeft{
float:left;
 padding:7px;
 font-size:15px;

}
.carOwnerspanRight{
float:right;
 padding:7px; 
 color:#8AE188;

}
.carOwnerdiv{
background:#F5F5F5;
color:#333333;

}
.carOwnerName{
float:left;
padding:7px;
font-size:large;
margin-top:25px;
}
.carOwnerImage{
border:solid 1px #f5f5f5;
height:100px;
width:100px;
float:left;

}
.bookingspanLeft{
float:left;
padding:2px;
font-size:15px;

}
.bookingselectoption{
border:none;
width:90px;
padding:5px;
float:right;
}

</style>
<!-- Section Wrapper --><section class="no-rtl">
<!-- Content --><div id="content" class="price">


<!-- Breadcrumbs --><div id="breadcrumbs"><div class="box-container">
<?php echo $this->session->flashdata('booking_successfull'); ?>
    <div class="breadcrumbs-page-title"><h1>  Submit listing</h1></div>
    <div class="breadcrumbs"><span><a href="<?php echo base_url();?>/index.php/home">Home</a> <i class="fa fa-chevron-right"></i> </span>Submit listing</div>

</div></div><!-- Breadcrumbs -->

<!-- Subscribe Block --><div id="subscribe" class="box-container">

                
<div id="pricing-plans">
    <div class="title">
        <h2>Book Your Ride</h2>
    </div>
<?php foreach($val as $val1) { 
 //$count=$val1['seatOffered'];
?>
    <div class="pricing-table" >

                    <div class="pricing-column opacity" style="width:45%">
               <div class="pricing-header second">Ride Details</div>
      
                                                <div class="pricing-cell">  <span class="ridedetailsSpanLeft" >Departure point </span>
												   <span style="float:right; padding:7px"><?php echo $val1['departure']; ?></span> </div>
												   
									             <div class="pricing-cell"><span class="ridedetailsSpanLeft">Drop-off poin </span>
												   <span class="ridedetailsSpanRight"><?php echo $val1['arrival']; ?></span> </div>
												   
                                                    <div class="pricing-cell"><span class="ridedetailsSpanLeft">Departure date</span>
												   <span class="ridedetailsSpanRight"><?php echo $val1['departureDate']; ?></span> </div>
												   
												        <div class="pricing-cell"><span class="ridedetailsSpanLeft">Stops </span>
												   <span class="ridedetailsSpanRight"><?php echo $val1['stops']; ?></span> </div>
												   
                                                    <div class="pricing-cell"><span class="ridedetailsSpanLeft">Travel Bag </span>
												   <span class="ridedetailsSpanRight"><?php 
												   
												    if ($val1['luggageSize']==0){ ?>
												   
												   Small
												   
												 <?php   }
												 
												  elseif($val1['luggageSize']==1){ ?>
												  
												  
												   Medium
												   
												<?php    }
												
												   else{ ?>
												   
												   Large
												   
												  <?php  }
												   
												   ?></span> </div>
												   
                                                    <div class="pricing-cell"><span class="ridedetailsSpanLeft">Departure In </span>
												   <span class="ridedetailsSpanRight">
												  <?php 
												   
												    if ($val1['leavingAt']==0){ ?>
												   
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
												   
												  <?php  }
												   
												   ?> 
												   </span></div>
												   
                                                     <div class="pricing-cell"><span class="ridedetailsSpanLeft">Detour </span>
												   <span class="ridedetailsSpanRight"><?php 
												   
												    if ($val1['detour']==1){ ?>
												   
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
												   
												<?php    } ?> </span> </div>
                            </div>
        
				<div class="pricing-column opacity" style="width:25%">
									<div class="pricing-header second">Car Owner</div>
									<div class="pricing-cost" >
									<span ><img  src="<?php echo base_url(); ?>upload/profilePic/<?php echo $val1['images']; ?>"  class="carOwnerImage"/></span> 
									<span class="carOwnerName"><?php echo $val1['first_name']; ?> <?php echo $val1['last_name']; ?></span>
									
									</div>
									
									<div class="pricing-cell"> 
									<span class="carOwnerspanLeft">Govt. ID </span>
                                                
										<span class="carOwnerspanRight">
												
												<?php  if ($val1['govID_status']==1){ ?>
												   
												  Verified
												   
												 <?php   }
												 
												
												
												else { ?>
												  
												  
												  Not verified
												   
												<?php    } ?>									</span>
									</div>
									<div class="pricing-cell"> 
									<span class="carOwnerspanLeft">Phone number  </span>
									<span class="carOwnerspanRight"><?php  if ($val1['ph_status']==1){ ?>
												   
												  Verified
												   
												 <?php   }
												 
												
												
												else { ?>
												  
												  
												  Not verified
												   
												<?php    } ?>	</span>
									</div>
									<div class="pricing-cell"> 
									<span class="carOwnerspanLeft">Email address  </span>
									<span class="carOwnerspanRight"><?php  if ($val1['status']==1){ ?>
												   
												  Verified
												   
												 <?php   }
												 
												
												
												else { ?>
												  
												  
												  Not verified
												   
												<?php    } ?>	</span>
									</div>
									<div class="pricing-cell"> 
									<span class="carOwnerspanLeft">Car  </span>
									<span class="ridedetailsSpanRight">Maruti</span>
									</div>
									<div class="pricing-cell"> 
									<span class="carOwnerspanLeft">Contact Owner  </span>
									<div class="detail-icon"><span class="carOwnerspanRight" ><a href="#"><li class="fa fa-phone"></li></a></span></div>
									</div>                                                                                                                
																			  
																				   
				</div>
        
                    
					
        
                    <div class="pricing-column opacity" style="width:23%" >
          
				
				<form method="POST" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Home/book/<?php echo $val1['id'];?>" enctype="multipart/form-data" name="enquiry_form" onsubmit="return(validate());">
							
							<div class="pricing-header first"><?php if($leftseats<=0){ echo "0" ;}
							else{
							 echo $leftseats; } ?> Seats left</div>
							<div class="pricing-cost"><div class="price-currency">Rs</div><div class="price-big"><?php echo $val1['pricePerCoTraveller']; ?></div><br><br>per co-traveller</div>
							<div class="pricing-cell"> 
							<span class="bookingspanLeft">Select Seats </span>
							<span>
							
							<select class="bookingselectoption" name="seats">
							<?php 
							for($i=1; $i<=$leftseats; $i++) { ?>
							<option value="<?php echo $i ; ?>" ><?php echo $i ; ?>seats</option>
							<?php } ?>
							</select>
							</span> 
							</div>
							<script type="text/javascript">

   <!--
      // Form validation code will come here.
	  
      function validate()
      {
      
         if( document.enquiry_form.checked.value == "" )
         {
            alert( "Please Accept Terms and conditions!" );
            document.enquiry_form.checked.focus() ;
            return false;
         }
       
         
        
         
        
         return( true );
      }
      
      
 
</script>

							<div class="pricing-cell"> 
							<span style="bookingspanLeft"><input type="checkbox" style="display:block !important" name="checked"/>I have read and accept the <a href="#">T&Cs </a>and certify I am over 18 years old. </span>
							
							</div>
							<div class="pricing-cell"> 
				
							
							</div>
							<div class="pricing-cell"> 
							<span style="bookingspanLeft">
							<?php if($leftseats<=0) { ?> <span style="color:#CC0033">NO Seats Left</span> <?php }
							else{ ?> <button type="submit">BOOK NOW</button></span> 
							
							<?php } ?>
							
							
							
							</div>                                                         
                           </div>
                                               </form>    
                           
       
        <div class="clear"></div>

    </div>
<?php } ?>
</div>    
   <div id="comment-message" class="comment-message">
    						<div id="respond" class="comment-respond">
				<h3 id="reply-title" class="comment-reply-title"><div class="title">Send Query</div> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/metrodir/company/industrie-llc/#respond" style="display:none;">Cancel reply</a></small></h3>
									<form action="<?php echo base_url(); ?>/index.php/Home/message/<?php echo $msg_to ;?>" method="post" id="comment-message-form" class="comment-form">
																									<div class="clear"></div>
<input id="url" class="text-input-grey" name="header" type="text" value="" size="30" placeholder="Subject"/><div class="clear"></div>
												<textarea class="text-input-grey comment-message-main"  name="msg" cols="45" rows="8" aria-required="true" placeholder="Message..."></textarea><div class="clear"></div>						
						<p class="form-submit"><input name="submit" type="submit" id="button-2-green" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='396' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p>					</form>
							</div><!-- #respond -->
			</div>             
<div id="register">
   
	
</div>    
</div><!-- /Subscribe Block -->


</div><!-- /Content -->



