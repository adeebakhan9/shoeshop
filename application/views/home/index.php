<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery-ui.css">
<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
<!-- Section Wrapper --><section class="no-rtl">

<!-- Search -->



<div id="search" class="with-advanced"><div id="search-shadow"></div><div class="box-container">

        <!-- Advanced Search Button -->
		
		<div class="advanced-search-control">
        <a href="http://demo.sokolby.com/metrodir/#" class="advanced-search-button show" title="Show Advanced Search"><i class="fa fa-align-justify"></i></a>
        <a href="http://demo.sokolby.com/metrodir/#" class="advanced-search-button hide" title="Hide Advanced Search"><i class="fa fa-align-justify"></i></a>
    </div>
	
	<!-- /Advanced Search Button -->
    
    <!-- Default Search -->
	
	<form id="default-search" class="default-search clearfix" action="<?php echo base_url();?>/index.php/home/rideList">
        <input type="text" id="search-what" class="text-input-black input-text" name="s" placeholder="Insert company name" value="From">
		
		
        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
		
		<input type="text" id="search-where" class="text-input-black input-text ui-autocomplete-input" name="where" placeholder="To" autocomplete="off" value="">
	
     <input type="text" id="datepicker" class="text-input-black input-text" name="departureDate" placeholder="Date" autocomplete="off" value="">
	
        <div class="submit"><i class="fa fa-search"></i>
		
		<input type="submit" class="submit" value="Search Now" title="Search Now" name="search_simple"></div>
        <div class="clear"></div>
    </form>
	
	<!-- /Default Search -->

        
    
  
</div></div><div class="clear"></div><!-- /Search -->


    
    
<!-- Map Wrapper --><div id="map-wrapper">

    <!-- Map -->
	
	 <div id="map"></div>

    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_57QESP5grk5MWnOq9EfKO_4HUNBIhkc&callback=initMap">
    </script>
	
	<!-- /Map -->



</div><!-- /Map Wrapper -->

   
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
	$("#datepicker2").datepicker();
  });
  </script>

   



   