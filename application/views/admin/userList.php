<div class="box col-md-10">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> User List</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info"></a></div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>User</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    
    <?php foreach($users as $row1)  { ?>
   
    <tr>
        <td><?php echo $row1['first_name']; ?> <?php echo $row1['last_name']; ?></td>
        <td class="center"><?php echo $row1['email']; ?></td>
        <td class="center"><?php echo $row1['ph_number']; ?></td>
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
          
            <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/admin/update_user_status_page/<?php echo $row1['id']; ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
        
        </td>
    </tr>
<?php } ?>
   
  
    </tbody>
    </table>
    </div>
    </div>
    </div>