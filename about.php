<?php include('includes/head.php'); ?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtrlBrH5md22zETMw91iVZ38XxgpAlT4o&sensor=true"></script>
  <script type="text/javascript">
    function initialize(){

// Create an array of styles.
    var styles = [
    {
    },{
      featureType: "water",
      elementType: "all",
      stylers: [
        { color:"#81A8D9" }
      ]   
    },{
      featureType: "road",
      stylers: [
        { hue:"#e94103" },
        { visibility: "simplified" }
      ]
    },{
      featureType: "all",
      elementType: "labels",
      stylers: [
        { visibility: "on" }
    ] 
    }
    ]; 
    // Create a new StyledMapType object, passing it the array of styles,
// as well as the name to be displayed on the map type control.
    var styledMap = new google.maps.StyledMapType(styles);
  
        var mapOptions = {
            center: new google.maps.LatLng(51.5240123,-0.0655878),
            zoom: 12,
            mapTypeControl: true,
            scrollwheel: false,
            zoomControl: true,
            zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL
        },
            panControl: true,
            panControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT
        },
        };
        var map = new google.maps.Map(document.getElementById("the_map"),
        mapOptions);
        
// this is our gem
google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center); 
});

        var marker = new google.maps.Marker({
    position: map.getCenter(),
    icon: 'img/7wf87.gif',
    map: map,
    animation: google.maps.Animation.BOUNCE
  });

        var myControl = document.getElementById('banner_text');
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(myControl);

//Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');


        }

        google.maps.event.addDomListener(window, 'load', initialize);
  </script>
<?php include('includes/header.php'); ?>



	<!-- BANNER SECTION STARTS HERE -->
	<section id="the_map">

    	<!-- <div class="slider">
            <ul>
                  <li><img src="img/banner-test-1.jpg" /></li>
                  <li><img src="img/banner-test-2.jpg" /></li>
            </ul>
        </div> -->
		
	</section>
    <!--<div class="container"> 
        <div id="banner_text" class="grid_12">
            <h1>GC Energy Partners</h1>
            <h2>Finding you a position withing the energey industry</h2>
        </div>
    </div>-->
	<!-- END OF BANNER SECTION -->


    <!-- START OF MAIN CONTENT AREA -->
    <div class="container"> 

        <section class="sidebar grid_4 omega">
        <?php include('includes/search_widget.php'); ?>
        <?php include('includes/cv_widget.php'); ?>
        <?php include('includes/browse_widget.php'); ?>        
        </section>
        
    </div>


<?php include('includes/footer.php'); ?>