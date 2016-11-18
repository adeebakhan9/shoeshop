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


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
          <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i>Add products</h2>

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
                <div class="col-md-12">
             <table class="table  datatable responsive">
    <thead>
    <tr>
        <th>Doctor</th>
        <th>Email</th>
        <th>Location</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    
    <?php foreach($row as $row1)  { ?>
   
    <tr>
        <td><?php echo $row1['first_name']; ?> <?php echo $row1['last_name']; ?></td>
        <td class="center"><?php echo $row1['email']; ?></td>
        <td class="center"><?php echo $row1['address']; ?></td>
        <td class="center">
           
			
			
			<?php if($row1['status']==1){?>
									        <span class="label-default label label-danger">Banned</span>

			
			 <?php }
			 
			else{ ?>
					 <span class="label-success label label-default">Active</span>
				
				<?php } 
			 
			  ?>
        </td>
        <td class="center">
          
            <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/admin/update_status_page/<?php echo $row1['id']; ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a onclick="return confirm('Do you want to delete?');" href="<?php echo base_url(); ?>/index.php/admin/delete_doctor/<?php echo $row1['id'];?>" class="btn btn-danger" >
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
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

<!--/row--><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it --><!-- Ad ends -->

    <hr>