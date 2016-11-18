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
                <h2>Bookings </h2>

               
            </div>
            <br />
            
            <div class="box-content row"  >
                <div class="col-md-12">
                   
	
        
        
           <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
	<th>Traveller name</th>
        <th>Rider name</th>
        <th>date</th>
        <th>seats</th>
		

        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
	<?php foreach($rider as $rider1 ){ ?>
    <tr>
	 <td><?php echo $rider1['first_name'];  echo $rider1['last_name']; ?></td>
        <td><?php 
		
		 $query2=$this->db->query("select ride.user_id, user.first_name,user.last_name from ride Left JOIN user on ride.user_id=user.id where ride.id='".$rider1['ride_id']."'");
		 $result=$query2->result_array();
		 
		foreach($result as $owner) { echo $owner['first_name']; ?><?php echo $owner['last_name']; } ?></td>
      
        <td class="center"><?php echo $rider1['date']; ?></td>
	    <td class="center"><b><?php echo $rider1['seats']; ?></td>
		
       
        <td class="center">
            <a class="btn btn-success" href="<?php echo base_url(); ?>/index.php/admin/viewBooking/<?php echo $rider1['ride_id'];?>">
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
	
	