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
	<link href="css/skrollr.css" rel="stylesheet">
	<link href="css/mobile.css" rel="stylesheet">
	<script type="text/javascript" src="js/modernizr.js"></script>
</head>
<body>
	<header id="header">
		<div class="navbar navbar-fixed-top">
    	<div class="navbar-inner">
    		<div class="container">
    			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</a>
    			<a class="brand" href="#">{{{brand}}}</a>
    			<div class="nav-collapse">
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
    				  <!--
    				  <li><a href="/ru"><img src="img/flags/ru.png" /></a></li>
    				  -->
    				</ul>
    			</div>
    		</div>
    	</div>
    </div>
	</header>
	
	<div class="container">
	  <div id="main" role="main">
	    <section id="welcome">
	     <img class="background" src="img/bgs/home.jpg" />
	    </section>
	    
	    <section id="ourstory">
	      <img class="background" src="img/bgs/ourstory.jpg" />
			  <img class="clouds" src="img/ourstory/clouds.png" />
			  <img class="trees" src="img/ourstory/trees_back.png" />
			  <img class="building" src="img/ourstory/building.png" />
			  <img class="trees" src="img/ourstory/trees_front.png" />
			  <img class="bushes" src="img/ourstory/bushes.png" />
			  <!-- <img class="lightpost" src="img/ourstory_lightpost.png" /> -->
			  <div class="copy">
			    <p class="pageTitle">{{{ourstoryTitle}}}</p>
			    <p>{{{ourstoryMessage}}}</p>
			  </div>
			</section>
			
			<section id="travel">
			  <img class="background" src="img/bgs/travel.jpg" />
			  <img class="clouds" src="img/travel/clouds.png" />
			  <img class="tree" src="img/travel/trees.png" />
			  <img class="plane" src="img/travel/plane.png" />
        <img class="airport" src="img/travel/airport.png" />
			  <img class="truck" src="img/travel/truck.png" />
			  <div class="copy">
			    <p class="pageTitle">{{{travelTitle}}}</p>
			    <p>{{{travelMessage}}}</p>
			  </div>
			</section>
			
			<section id="destination">
			  <img class="background" src="img/bgs/destination.jpg" />
			  <!-- <img class="plane" src="img/travel/plane_flipped.png" /> -->
			  <img class="background" src="img/destination/hotel_bgfix.png" />
			  <img class="hotel" src="img/destination/hotel.png" />
			  <div class="copy">
			    <p class="pageTitle">{{{destinationTitle}}}</p>
			    <p>{{{destinationMessage}}}</p>
			  </div>
			</section>
			
			<section id="gifts">
			  <img class="background" src="img/bgs/gifts.jpg" />
			  <img src="img/gifts/ribbons.png" />
			  <img src="img/gifts/gift3.png" />
			  <img src="img/gifts/gift1.png" />
			  <img src="img/gifts/gift2.png" />
			  <img src="img/gifts/gift4.png" />
			  <img src="img/gifts/gift5.png" />
			  <img src="img/gifts/bag1.png" />
			  <img src="img/gifts/gift6.png" />
			  <img src="img/gifts/bag2.png" />
			  <img src="img/gifts/gift7.png" />
			  <div class="copy">
			    <p class="pageTitle">{{{giftsTitle}}}</p>
			    <p>{{{giftsMessage}}}</p>
			  </div>
			</section>
			
			<section id="contact">
			  <img class="background" src="img/bgs/contact.jpg" />
			  <img src="img/contact/mailbox.png" />
			  <img src="img/contact/letters.png" />
        <div class="copy">
			    <p class="pageTitle">{{{contactTitle}}}</p>
			    <p>{{{contactMessage}}}</p>
			  </div>
			</section>
			
		</div>
		
	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		  
		});
	</script>
</body>
</html>