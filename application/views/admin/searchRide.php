
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
   