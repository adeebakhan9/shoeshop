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
           <a href="#"> <h3> </h3></a>
        </li>
    </ul>
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
        <th>Departure point</th>
        <th>Drop-off point</th>
        <th>Departure Date and Time</th>
		<th>Arrival Date and Time</th>

        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
	<?php foreach($val as $val1) { ?>
    <tr>
        <td><?php echo $val1['departure']; ?></td>
      
        <td class="center"><?php echo $val1['arrival']; ?></td>
	    <td class="center"><b><?php echo $val1['departureDate']; ?> </b>  <?php echo $val1['departureTime']; ?></td>
		 <td class="center"><b><?php echo $val1['arrivalDate']; ?> </b>  <?php echo $val1['arrivalTime']; ?></td>
       
        <td class="center">
            <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/User/viewRide/<?php echo $val1['id']; ?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
         
        </td>
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
	
	