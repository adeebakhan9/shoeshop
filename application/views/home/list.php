<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery-ui.css">
 <div id="search" class="with-advanced"><div id="search-shadow"></div><div class="box-container">

        <!-- Advanced Search Button -->
		
		<div class="advanced-search-control">
        <a href="http://demo.sokolby.com/metrodir/#" class="advanced-search-button show" title="Show Advanced Search"><i class="fa fa-align-justify"></i></a>
        <a href="http://demo.sokolby.com/metrodir/#" class="advanced-search-button hide" title="Hide Advanced Search"><i class="fa fa-align-justify"></i></a>
    </div>
	
	<!-- /Advanced Search Button -->
    
    <!-- Default Search -->
	
	<form id="default-search" class="default-search clearfix" role="search" method="post">
	
        <input type="text" id="from" class="text-input-black input-text" name="s" placeholder="Insert company name" value="From">
		
		
        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
		
		<input type="text" id="to" class="text-input-black input-text ui-autocomplete-input" name="where" placeholder="To" autocomplete="off" value="">
	
     <input type="text" id="datepicker" class="depDate form-control" name="depDate" placeholder="Date" autocomplete="off" value="">
	
        <div class="submit"><i class="fa fa-search"></i>
		
		<input type="submit" class="submit" value="Search Now" title="Search Now" name="search_simple" id="search"></div>
        <div class="clear"></div>
		
    </form>
	
	<!-- /Default Search -->

        
    
  
</div></div>

<div class="clear"></div><!-- /Search -->
<div class="box-container div_one">



<?php foreach($val as $val1) { ?>
<div id="company-388" class="company-listing with-image">

    
            <div class="company-listing-image">
            <a class="opacity" href="#">
                <img width="140" height="140" src="<?php echo base_url(); ?>upload/profilePic/<?php echo $val1['images']; ?>" class="attachment-140x140 wp-post-image" alt="nest-150x150" style="border-radius:50%; border:solid 2px #f5f5f5"/>                            </a>
        </div>
    
    
    <div class="company-listing-body">
    <div class="company-listing-title"><a href="#"><span><?php echo $val1['first_name']; ?> <?php echo $val1['last_name']; ?></a></div>
        
        <div class="company-listing-title"><a href="#"><span><?php echo $val1['departureDate']; ?></cite></span>
                                    <span>-</span>
                                    <span><?php echo $val1['departureTime']; ?></span></a></div>
									
									  
    

        
        <div class="company-listing-categories">
            <a href="#" title="Advertising">Departure : <?php echo $val1['departure']; ?></a><span>, </span><a href="#" title="Industry">Arrival: <?php echo $val1['arrival']; ?></a>   
		    </div>

        
        
        <div class="company-listing-text">Price per co-Traveler : <?php echo $val1['pricePerCoTraveller']; ?>  <br />Seats offered : <?php echo $val1['seatOffered']; ?>
		</div>
		
		

        <div class="company-listing-more"><a href="<?php echo base_url(); ?>/index.php/Home/bookRide/<?php echo $val1['id'];?>"><i class="fa fa-arrow-circle-right"></i>Book Now</a></div>

    </div>

    <div class="clear"></div>

</div>

 <?php } ?>
</div>
<div class="box-container result">

</div>

<div class="box-container">

<ul class="commentlist">
                      
<div class="result"></div>
                  <!-- #comment-## -->
</ul>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

	 <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
	
  });
  
  
  
  
  </script>
	<script>
	
	
	$(document).ready(function(){
	
	
    $("#search").submit(function(a){
   a.preventDefault();
 //alert("satya");
     var to=$("#to").val();
      
      var from=$("#from").val();
	  var depDate=$(".depDate").val();
 //alert(to);
// alert(from);
           
   $.ajax({
           
           
           type:"POST",
           url:"home/search_ride" ,
            data: {
            'to':to,
              'from':from,
			  'depDate':depDate
			  
			  
			  
			  
        },
           success:function(satya){
			   //alert("success");
			//   alert(specialization);
           $(".div_one").hide();
           $(".result").html(satya);
           
          
           }
           
           
           
           
           
           
           
           
           });
  
    });
});
	
	
	  </script>
	  