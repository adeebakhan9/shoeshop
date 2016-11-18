

<?php foreach($val as $val1) { ?>
<div id="company-388" class="company-listing with-image">

    
            <div class="company-listing-image">
            <a class="opacity" href="#">
			 <img width="140" height="140" src="<?php echo base_url(); ?>upload/profilePic/<?php echo $val1['images']; ?>" class="attachment-140x140 wp-post-image" alt="nest-150x150" style="border-radius:50%; border:solid 2px #f5f5f5"/>                            </a>
                                         </a>
        </div>
    
    
    <div class="company-listing-body">
    <div class="company-listing-title"><a href="#"><span><?php echo $val1['first_name']; ?> <?php echo $val1['last_name']; ?></a></div>
        
        <div class="company-listing-title"><a href="#"><span><?php echo $val1['departureDate']; ?></cite></span>
                                    <span>-</span>
                                    <span><?php echo $val1['departureTime']; ?></span></a></div>
									
									  
    

        
        <div class="company-listing-categories">
            <a href="#" title="Advertising">Departure : <?php echo $val1['departure']; ?></a><span>, </span><a href="#" title="Industry">Arrival: <?php echo $val1['arrival']; ?></a>        </div>

        
        
        <div class="company-listing-text">Price per co-Traveler : <?php echo $val1['pricePerCoTraveller']; ?>  <br />Seats offered : <?php echo $val1['seatOffered']; ?></div>
		
		

        <div class="company-listing-more"><a href="#"><i class="fa fa-arrow-circle-right"></i>Book Now</a></div>

    </div>

    <div class="clear"></div>

</div>

 <?php } ?>