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
                <h2> Queries</h2>

               
            </div>
            <br />
            
            <div class="box-content row"  >
                <div class="col-md-12">
                   
	
        
        
           <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
	<th>Name</th>
        <th>Email</th>
        <th>Query</th>
		 <th>Date</th>
      
    </tr>
    </thead>
    <tbody>
	<?php foreach($rider as $rider1 ){ ?>
    <tr>
	 <td><?php echo $rider1['name']; ?></td>
	  <td><?php echo $rider1['email']; ?></td>
	   <td><?php echo $rider1['comment']; ?></td>
	     <td></td>
     

		
       
     
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
	
	