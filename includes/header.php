</head>
<body>
	<header>
		<div class="container">
			<div class="grid_6 notopbottom">
        	<a href="#" class="main-logo">GC Energy Partners</a>
        	</div>
        	<div class="grid_6 none">

        	<p class="tel">Call our team today <a href="#">0207 183 9509</a></p>

			<nav class="grid_12 clearfix">
	        	<div class="clearfix">
	        		<h2 class="navheader slide_trigger">Menu <span></span></h2>
	                <ul class="main-nav clearfix">
	                    <li id="current"><a href="#">Home</a></li>
	                    <li><a href="about.php">About</a></li>
	                    <li><a href="#">Clients</a></li>
	                    <li><a href="#">Candidates</a></li>
	                    <li><a href="jobs.php">Jobs</a></li>
	                </ul>
	            </div>
			</nav>
			</div>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
    $('.slide_trigger').collapsable();
});
		/* MOBILE COLLAPSE MENU */
		(function($) {
		  $.fn.collapsable = function(options) {
		    // iterate and reformat each matched element
		    return this.each(function() {
		      // cache this:
		      var obj = $(this);
		      var tree = obj.next('.main-nav');
		      obj.click(function(){
		        if( obj.is(':visible') ){tree.toggle();}
		      });
		      $(window).resize(function(){
		        if ( $(window).width() <= 570 ){tree.attr('style','');};
		      });
		    });
		  };
		})(jQuery);
		</script>
	</header>