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
           <a href="#"> <h3>Offer a ride on your next long journey </h3></a>
        </li>
    </ul>
</div>
<div class=" row">
    
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
          <div class="box-header well">
                <h2><i class="glyphicon glyphicon-repeat"> </i> My schedule</h2>
	<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div>
               
            </div>
            <br />
            
            <div class="box-content row"  >
                <div class="col-md-10">
   
   
                   

        
		
		
        
            <form method="POST" class="form-horizontal"  action="<?php echo base_url(); ?>/index.php/User/addRide" enctype="multipart/form-data" >
           <div class="setup-content" id="step-1">
		        <h3>Type of trip</h3>
	
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="tripType" id="optionsRadios3" value="1" >
                     Just once - one-way or round trip
                    </label>
                </div>
                
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="tripType" id="optionsRadios3" value="2" >
                        Often - offer several rides at once
                    </label>
                </div>
               
                <div class="form-group col-sm-10" >
					 <h3> Pick-up and drop-off points</h3>
                        <label for="exampleInputEmail1">Departure</label>
                        <input type="text" class="form-control" name="departure" placeholder="Your departure point(address, city, station...)">
                </div>
				
                <div class="form-group col-sm-10">
                        <label for="exampleInputPassword1">Arrival</label>
                        <input type="text" class="form-control" name="arrival" placeholder="Your departure point(address, city, station...)">
                </div>
                
                  
		        <div class="form-group col-sm-10">
					<h4>Stopovers </h4>
					
                        <label for="exampleInputPassword1"> Now enter the main cities you will drive through: this is key to connecting you and your co-travellers</label>
					<div id="main">
					<input type="button" class="btn btn-primary" id="btAdd" value="Add cities on your way.. " class="bt" />
					<input type="button" class="btn btn-primary" id="btRemove" value="Remove" class="bt" />
					<input type="button" class="btn btn-primary" id="btRemoveAll" value="Remove All" class="bt" /><br />
					</div>

				
                 </div>
				
                   
                      
		
                <div class="form-group col-sm-5">
					    <h3> Date and times</h3>
                        <label for="exampleInputPassword1">Departure Date</label>
                       		  <input id="datepicker" class="form-control" placeholder="DD/MM/YYYY" name="departureDate"/> 
							   <br><input id="" type="text" placeholder="time" class="form-control" name="departureTime"/>
							      <br>
							       <label for="exampleInputPassword1">Arrival Date</label>
							     <input id="datepicker2" class="form-control"  placeholder="DD/MM/YYYY" name="arrivalDate"/>
							  <br><input id="" type="text" placeholder="time" class="form-control" name="arrivalTime"/>
			    </div>
                   

                       
                   
                
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                       
                        <button class="btn btn-primary nextBtn" name="update_traveller" type="button">Next</button>
                       
                    </div>
                </div>
           
			
         
      </div>
	  
	    <div class="row setup-content" id="step-2">
	  <div class="col-md-10"  id="form2">
                   
	  <div class="form-group col-sm-10">
		        <h3>Price per co-traveller</h3>
	
              <div class="form-group col-sm-5">
			  
			   Lucknow --> Delhi
			   </br></br>
    <div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-numbertwo" disabled="disabled" data-type="minus" data-field="quanttwo[1]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quanttwo[1]" class="form-control input-numbertwo" value="1" min="400" max="2000">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-numbertwo" data-type="plus" data-field="quanttwo[1]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
      </div>
    
</div></div>
               
       

		       
				
		
				
				    <div class="form-group col-sm-10">
					 <h3> Number of seats offered:
</h3>

<div class="form-group col-sm-5">

    <div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
	 </div>
</div>
                    </div>
                    
                
                  
		            <div class="form-group col-sm-10">
					<h4>Options </h4>
			      
				   <div class="radio-inline">
                    <label>
           					              <input type="radio" name="backSeat" id="optionsRadios3" value="1" >

                     Max. 2 in the back seat
                    </label>
					<br />Guarantee max. 2 people in the back of the car (preferred by co-travellers)
                </div>
                    </div>
				
                   
                      
		
                       <div class="form-group col-sm-8">
					    <h3>Ride details</h3>
                        <label for="exampleInputPassword1">Please add further details about your ride - it'll save you answering lots of questions from co-travellers.</label>
                       		  <textarea id="datepicker" class="form-control" placeholder="Please add further details about your ride - it'll save you answering lots of questions from co-travellers.Please add further details about your ride - it'll save you answering lots of questions from co-travellers." name="rideDetails" style="height:100px"></textarea> 
							 
							      <br>
								   Please do not add your contact details here. Interested co-travellers will receive your phone number individually
								   <a href="#">(See our rules)</a><br />
								  <br>
								  
							       <label for="exampleInputPassword1">Maximum luggage size:</label>
							     
								 <select class="form-control" name="luggageSize">
								 
								 <option value="0">Small</option>
								 <option value="1">Medium</option>
								 <option value="2">Big</option>
								 
								 </select>
								 <br />
								   
							       <label for="exampleInputPassword1">I will leave:</label>
							     
								 <select class="form-control" name="leavingAt">
								 
								 <option value="0">Right on Time</option>
								 <option value="1">In a 15 minute window</option>
								 <option value="2">In a 30 minute window</option>
								 <option value="3">In a 1 hour window</option>
								 <option value="4">In a 2 minute window</option>
								 
								 </select>
								 <br />
								   
							       <label for="exampleInputPassword1">I can make a detour:</label>
								   
								   
							        <select class="form-control" name="detour" >
									<option value="1">I'm not willing to make a detour</option>
									<option value="2">15 min detour max</option>
									<option value="3">30 min detour max</option>
									<option value="4">Anything is fine</option>
									</select>
								 
						
					   </div>
                   

                    
                   
                
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                       
                        <button class="btn btn-primary" name="update_traveller" type="submit" id="">Add</button>
              
                    </div>
                </div>
				</div>
            </form>
			
         
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
	$("#datepicker2").datepicker();
  });
  
  
  
  
  </script>
  
  
  <script>
    $(document).ready(function() {

        var iCnt = 0;
        // CREATE A "DIV" ELEMENT AND DESIGN IT USING jQuery ".css()" CLASS.
        var container = $(document.createElement('div')).css({
            padding: '5px', margin: '20px', width: '270px', border: '1px dashed',
            borderTopColor: '#999', borderBottomColor: '#999',
            borderLeftColor: '#999', borderRightColor: '#999'
        });

        $('#btAdd').click(function() {
            if (iCnt <= 19) {

                iCnt = iCnt + 1;

                // ADD TEXTBOX.
                $(container).append('<input type=text class="input" name="city[]" id=tb' + iCnt + ' ' +
                            'value="Add cities on your way.. " />');

                // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
                if (iCnt == 1) {

                    var divSubmit = $(document.createElement('div'));
                    $(divSubmit).append('<input type=button class="bt"' + 
                        'onclick="GetTextValue()"' + 
                            'id=btSubmit value=Submit />');

                }

                // ADD BOTH THE DIV ELEMENTS TO THE "main" CONTAINER.
                $('#main').after(container, divSubmit);
            }
            // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
            // (20 IS THE LIMIT WE HAVE SET)
            else {      
                $(container).append('<label>Reached the limit</label>'); 
                $('#btAdd').attr('class', 'bt-disable'); 
                $('#btAdd').attr('disabled', 'disabled');
            }
        });

        // REMOVE ONE ELEMENT PER CLICK.
        $('#btRemove').click(function() {
            if (iCnt != 0) { $('#tb' + iCnt).remove(); iCnt = iCnt - 1; }
        
            if (iCnt == 0) { 
                $(container)
                    .empty() 
                    .remove(); 

                $('#btSubmit').remove(); 
                $('#btAdd')
                    .removeAttr('disabled') 
                    .attr('class', 'bt');
            }
        });

        // REMOVE ALL THE ELEMENTS IN THE CONTAINER.
        $('#btRemoveAll').click(function() {
            $(container)
                .empty()
                .remove(); 

            $('#btSubmit').remove(); 
            iCnt = 0; 
            
            $('#btAdd')
                .removeAttr('disabled') 
                .attr('class', 'bt');
        });
    });

    // PICK THE VALUES FROM EACH TEXTBOX WHEN "SUBMIT" BUTTON IS CLICKED.
    var divValue, values = '';

    function GetTextValue() {

        $(divValue) 
            .empty() 
            .remove(); 
        
        values = '';

        $('.input').each(function() {
            divValue = $(document.createElement('div')).css({
                padding:'5px', width:'270px'
            });
            values += this.value + '<br />'
        });

        $(divValue).append('<p><b>Your selected values</b></p>' + values);
        $('body').append(divValue);
    }
</script>
<script>
//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-numbertwo').click(function(b){
    b.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-numbertwo').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-numbertwo').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-numbertwo[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-numbertwo[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-numbertwo").keydown(function (b) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(b.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (b.keyCode == 65 && b.ctrlKey === true) || 
             // Allow: home, end, left, right
            (b.keyCode >= 35 && b.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((b.shiftKey || (b.keyCode < 48 || b.keyCode > 57)) && (b.keyCode < 96 || b.keyCode > 105)) {
            b.preventDefault();
        }
    });
	</script>
<script>
//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	</script>
	<script>

$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});

</script>