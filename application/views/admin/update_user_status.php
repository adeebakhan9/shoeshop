<div class="box col-md-10">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Doctors List</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info"></a></div>
    
    	  <form method="POST" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/admin/update_user_status_page/<?php echo $t_id ; ?>" enctype="multipart/form-data" >
          
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
      
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    
     <?php foreach ($satya1 as $satya ){ ?>
   
    <tr>
        
        <td class="center">
           
			
			
			<?php if($satya['status']==1){?>
				
 <span class="label-default label label-danger">Banned</span>		
 	 <?php }
			 
			else{ ?>
				 <span class="label-success label label-default">Active</span>
					       
				
				<?php } 
			 
			  ?>
              
              <select name="status">
              <option value="0">Active</option>
              <option value="1">Banned</option>
              
              </select>
        </td>
        <td class="center">
           
                
                <button class="btn btn-primary" name="update_status" type="submit">Update</button>
            
            
        </td>
    </tr>
<?php } ?>
   
  
    </tbody>
    </table>
    </form>
    </div>
    </div>
    </div>