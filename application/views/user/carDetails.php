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
<div class=" row">
    
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
          <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"> </i> Your car Details</h2>

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
            
           <div class="box-content">
    <div class="alert alert-info"></a></div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Name</th>
        <th>Image</th>
        <th>Model</th>
        <th>Seats</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    
    <?php foreach($val as $val1)  { ?>
   
    <tr>
        <td><?php echo $val1['carName']; ?> </td>
        <td class="center"><img src="<?php echo base_url(); ?>upload/car/<?php echo $val1['images']; ?>" style="width:150px"/></td>
        <td class="center"><?php echo $val1['model']; ?></td>
         <td class="center"><?php echo $val1['seats']; ?></td>
  
        <td class="center">
            <a onclick="return confirm('Do you want to delete?');" href="<?php echo base_url(); ?>index.php/User/deleteCar/<?php echo $val1['id']; ?>" >
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


    <hr>
    
