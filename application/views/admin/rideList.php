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
		
         
	
	</li>
    </ul>
	
				<form id="default-search" class="default-search clearfix" role="search" method="post">
				 <input type="text" id="from" class="text-input-black input-text" name="s" placeholder="From" >
				 <input type="text" id="to" class="text-input-black input-text ui-autocomplete-input" name="where" placeholder="To" autocomplete="off" value="">
				 <input type="text" id="datepicker" class="depDate" name="depDate" placeholder="Date" autocomplete="off" value="">
				 <input type="submit" class="submit" value="Search Now" title="Search Now" name="search_simple" id="search" > 
				 <div class="clear"></div>
				</form>
	
</div>
<div class=" row">
    
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
          <div class="box-header well">
                <h2><i class="glyphicon glyphicon-repeat"> </i> Ride offered</h2>

               
          </div>
            <br />
            
            <div class="box-content row"  >
                <div class="col-md-12">
                   
	
        
        
           <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
	<th>Posted By</th>
        <th>Departure point</th>
        <th>Drop-off point</th>
        <th>Departure Date and Time</th>
		<th>Arrival Date and Time</th>

        <th>Actions</th>
    </tr>
    </thead>
    <tbody class="div_one">
	<?php foreach($ride as $val1) { ?>
    <tr>
	 <td><?php echo $val1['first_name']; ?> <?php echo $val1['last_name']; ?></td>
        <td><?php echo $val1['departure']; ?></td>
      
        <td class="center"><?php echo $val1['arrival']; ?></td>
	    <td class="center"><b><?php echo $val1['departureDate']; ?> </b>  <?php echo $val1['departureTime']; ?></td>
		 <td class="center"><b><?php echo $val1['arrivalDate']; ?> </b>  <?php echo $val1['arrivalTime']; ?></td>
       
        <td class="center">
            <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/Admin/viewRide/<?php echo $val1['id']; ?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
         
        </td>
    </tr>
  <?php } ?>
    </tbody>
	<tbody class="result"></tbody>
    </table>
         
      </div>
               
            </div>
        </div>
    </div>
</div>


    <hr>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

	 <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
	
  });
  
  </script>
 <script>
	
	
	$(document).ready(function(){
	
	
    $("#search").click(function(a){
	//alert("satya"); exit();
   a.preventDefault();
    //alert("satya"); exit();
    var to=$("#to").val();
      
      var from=$("#from").val();
	  var depDate=$(".depDate").val();
 alert(to);
 alert(from);
           
   $.ajax({
           
           
           type:"POST",
           url:"search_ride" ,
            data: {
            'to':to,
              'from':from,
			  'depDate':depDate
			  
        },
           success:function(satya){
			   alert("success");
			//   alert(specialization);
           $(".div_one").hide();
           $(".result").html(satya);
		   
           }
		   
           });
  
    });
});
	
	
	  </script>