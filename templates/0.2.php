<!DOCTYPE html>
<html lang="{{{language}}}">
<head>
	<meta charset="utf-8">
	<title>{{title}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- Le styles -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<!-- <link href="css/skrollr.css" rel="stylesheet"> -->
	<link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="js/modernizr.js"></script>
</head>
<body>
	
	<div class="container">
	
    <header id="header">
      <a class="brand" href="#">{{{brand}}}</a>
      
      <div class="navbar">
        <div class="navbar-inner">
    		  <div class="container">
    		    <ul class="nav">
    				  <li><a class="navlink" id="1000" href="#ourstory">{{{nav_OurStory}}}</a></li>
    				  <li><a class="navlink" id="3100" href="#travel">{{{nav_Travel}}}</a></li>
    				  <li><a class="navlink" id="6350" href="#destination">{{{nav_Destination}}}</a></li>
    				  <li><a class="navlink" id="9500" href="#gifts">{{{nav_Gifts}}}</a></li>
    				  <li><a class="navlink" id="12400" href="#contact">{{{nav_Contact}}}</a></li>
    				</ul>
    				<ul class="nav pull-right">
    				  <li><a href="/en"><img src="img/flags/ca.png" /></a></li>
    				  <li><a href="/it"><img src="img/flags/it.png" /></a></li>
    				  <li><a href="/ru"><img src="img/flags/ru.png" /></a></li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </header>
		
		<div id="main" role="main">
			
			<section id="welcome">
 			  <p>
			    {{{welcomeMessage}}}
			  </p>
			</section>
			
			<section id="ourstory">
			  <div class="copy">
			    <p class="pageTitle">{{{ourstoryTitle}}}</p>
			    <p>{{{ourstoryMessage}}}</p>
			  </div>
			</section>
			
			<section id="travel">
			  <div class="copy">
			    <p class="pageTitle">{{{travelTitle}}}</p>
			    <p>{{{travelMessage}}}</p>
			  </div>
			</section>
			
			<section id="destination">
			  <div class="copy">
			    <p class="pageTitle">{{{destinationTitle}}}</p>
			    <p>{{{destinationMessage}}}</p>
			  </div>
			</section>
			
			<section id="gifts">
			  <div class="copy">
			    <p class="pageTitle">{{{giftsTitle}}}</p>
			    <p>{{{giftsMessage}}}</p>
			  </div>
			</section>
			
			<section id="contact">
        <div class="copy">
			    <p class="pageTitle">{{{contactTitle}}}</p>
			    <p>{{{contactMessage}}}</p>
			  </div>
			</section>
			
		</div> <!-- /main -->
		<!--
		<hr>
		<footer id="footer">
			footer
		</footer>
		-->
	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		  $(window).bind('hashchange', function(){
		    var page = window.location.hash;
		    page = page.substring(1);
		    //scrollToPage(page);
		  });
		  $('a.brand').click(function(event){
		    event.preventDefault();
		    scroll(0,0);
		  });
		});
		window.onload = function() {
  		if( window.location.hash !== '' ) {
	      var page = window.location.hash;
		    page = page.substring(1);
		    //scrollToPage(page);
	    }
		}
	</script>
</body>
</html>