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
	<!-- <link href="css/bootstrap-responsive.css" rel="stylesheet"> -->
	<link href="css/skrollr.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
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
	  <div id="scrollPos" class="hide">0</div>
		
		<div id="main" role="main">
		  <div class="bgs">
		    <img data-0="top: 0px; left: 14.5%;" data-_ourstorystartminus100="top: -683px;" class="background" src="img/bgs/home.jpg" />
		    <img data-0="opacity: 0; top: 683px; left: 14.5%;" data-_ourstorystart="opacity: 1; top: 0px;" data-_ourstorydone="opacity: 1; left: 14.5%;" data-_ourstoryend="left: 100%" class="background" src="img/bgs/ourstory.jpg" />
		    <img data-0="top: 0px; left: -100%;" data-_ourstorydone="left: -100%;" data-_travelstartplus50="left: -33.7%;" data-_traveldone="left: 14.5%;" data-4100="left: 14.5%; opacity: 1;" data-4400="left: 14.5%; opacity: 0.5;" data-4700="left: 14.5%; opacity: 0.25;" data-5000="left: 14.5%; opacity: 0;" class="background" src="img/bgs/travel.jpg" />
		    <img data-0="top: 0px; left: -100%; opacity: 0;" data-_destinationbgstart="left: 14.5%; opacity: 0;" data-_destinationbgmiddle1="left: 14.5%; opacity: 0.25;" data-_destinationbgmiddle2="left: 14.5%; opacity: 0.5;" data-_destinationbgend="left: 14.5%; opacity: 1;" data-_destinationoutstart="top: 0px; left: 14.5%;" data-_destinationoutend="top: -683px; left: 14.5%;" class="background" src="img/bgs/destination.jpg" />
		    <img data-0="top: 3000px; opacity: 0;" data-2750="opacity: 0;" data-_destinationoutstart="opacity: 1;" data-_destinationoutend="opacity: 1; top: 0px;" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" class="background" src="img/bgs/gifts.jpg" />
        <img data-0="top: 3000px; opacity: 0;" data-3300="top: 3000px;" data-_giftsoutstart="opacity: 1;" data-_giftsoutend="top: 0px;" class="background" src="img/bgs/contact.jpg" />
		  </div>
			
			<!--
			<section id="welcome">
 			  <p data-0="top: 500px;" data-_ourstorystartminus100="top: -183px;">
			    {{{welcomeMessage}}}
			  </p>
			</section>
			-->
			
			<section id="ourstory">
			  <img data-0="top: 341.5px; left: -100%" data-_ourstorystart="top: 0px; left: 14.5%;" data-_ourstorydone="top: 0px; left: 14.5%;" data-_ourstoryend="top: 0px; left: 100%" class="clouds" src="img/ourstory/clouds.png" />
			  <img data-0="top: -683px; left: 200%" data-_ourstorystart="top: 0px; left: 14.5%;" data-_ourstorydone="top: 0px; left: 14.5%;" data-_ourstoryend="top: 0px; left: 100%" class="trees" src="img/ourstory/trees_back.png" />
			  <img data-0="top: 0px; left: 100%" data-_ourstorystart="top: 0px; left: 14.5%;" data-_ourstorydone="top: 0px; left: 14.5%;" data-_ourstoryend="top: 0px; left: 100%" class="building" src="img/ourstory/building.png" />
			  <img data-0="top: -683px; left: 200%" data-_ourstorystart="top: 0px; left: 14.5%;" data-_ourstorydone="top: 0px; left: 14.5%;" data-_ourstoryend="top: 0px; left: 100%" class="trees" src="img/ourstory/trees_front.png" />
			  <img data-0="top: 0px; left: -100%" data-_ourstorystart="top: 0px; left: 14.5%;" data-_ourstorydone="top: 0px; left: 14.5%;" data-_ourstoryend="top: 0px; left: 100%" class="bushes" src="img/ourstory/bushes.png" />
			  <!-- <img data-0="top: -683px; left: 65.5%" data-500="bottom: 200%; left: 65.5%" data-550="top: 0px; left: 14.5%;" data-1650="top: 0px; left: 14.5%;" data-2400="top: 0px; left: 100%" class="lightpost" src="img/ourstory_lightpost.png" /> -->
			  <div class="copy" data-0="top: 90px; opacity: 0;" data-950="opacity: 0;" data-1000="opacity: 1;" data-1900="opacity: 1;" data-1950="opacity: 0;">
			    <p class="pageTitle">{{{ourstoryTitle}}}</p>
			    <p>{{{ourstoryMessage}}}</p>
			  </div>
			</section>
			
			<section id="travel">
			  <img data-0="top: 0px; left: -100%;" data-_ourstorydone="top: 0px; left: -100%;" data-_travelstartplus50="top: 0px; left: -33.7%;" data-_traveldone="top: 0px; left: 14.5%;" data-4100="top: 0px; left: 14.5%; opacity: 1;" data-4400="top: 0px; left: 14.5%; opacity: 0.5;" data-4700="top: 0px; left: 13.7%; opacity: 0.25;" data-5000="top: 0px; left: 110%; opacity: 0;" class="clouds" src="img/travel/clouds.png" />
			  <img data-0="top: 0px; left: -100%;" data-_travelstart="top: 0px; left: -100%;" data-_travelalmostdone="top: 0px; left: -53.7%;" data-_traveldone="top: 0px; left: 14.5%;" data-3850="top: 0px; left: 14.5%;" data-4600="top: 683px; left: 100%;" class="tree" src="img/travel/trees.png" />
			  <img data-0="top: -40px; left: -100%;" data-_travelstart="left: -30%;" data-_travelalmostdone="left: 33.7%;" data-_traveldone="left: 73.7%;" data-3550="left: 73.7%; transform: rotate(0deg);" data-3700="top: -40px;" data-4100="top: -140px; left: -50%; transform: rotate(15deg);" data-5100="top: -340px; left: -110%;" class="plane" src="img/travel/plane.png" />
        <img data-0="top: 0px; left: -100%;" data-_travelstart="top: 0px; left: -100%;" data-_travelalmostdone="top: 0px; left: -53.7%;" data-_traveldone="top: 0px; left: 14.5%;" data-3850="top: 0px; left: 14.5%;" data-4600="top: 683px; left: 100%;" class="airport" src="img/travel/airport.png" />
			  <img data-0="top: 35px; left: 200%;" data-1000="left: 103.7%;" data-1200="left: 53.7%;" data-_ourstorydone="left: 14.5%;" data-_travelalmostdone="top: 35px;" data-_traveldone="top: 0px; left: 14.5%;" data-3850="top: 0px; left: 14.5%;" data-4600="top: 683px; left: 100%;" class="truck" src="img/travel/truck.png" />
			  <div class="copy" data-0="top: 90px; opacity: 0;" data-3050="opacity: 0;" data-3100="opacity: 1;" data-3700="opacity: 1;" data-3750="opacity: 0;">
			    <p class="pageTitle">{{{travelTitle}}}</p>
			    <p>{{{travelMessage}}}</p>
			  </div>
			</section>
			
			<section id="destination">
			  <img data-0="top: -658px; left: -110%;" data-_destinationstart="top: -444px; left: -110%;" data-_destinationmiddle1="top: -225px; left: -23.7%; transform: rotate(-10deg);" data-_destinationmiddle2="top: -100px; left: 13.7%; transform: rotate(0deg);" data-_destinationmiddle3="top: -100px; left: 33.7%;" data-_destinationend="top: -100px; left: 68.7%;" data-_destinationoutstart="top: -100px; left: 68.7%;" data-_destinationoutend="top: -783px; left: 68.7%;" class="plane" src="img/travel/plane_flipped.png" />
			  <img data-0="top: 0px; left: -100%; opacity: 0;" data-_destinationbgstart="left: 14.5%; opacity: 0;" data-_destinationbgmiddle1="left: 14.5%; opacity: 0;" data-_destinationbgmiddle2="left: 14.5%; opacity: 0;" data-_destinationbgend="left: 14.5%; opacity: 1;" data-_destinationoutstart="top: 0px; left: 14.5%;" data-_destinationoutend="top: -683px; left: 14.5%;" data-_destinationoutstart="top: 0px; left: 14.5%;" data-_destinationoutend="top: -683px; left: 14.5%;" class="background" src="img/destination/hotel_bgfix.png" />
			  <img data-0="top: 3683px; left: 100%;" data-_destinationstart="top: 0px; left: 100%;" data-_destinationmiddle1="top: 0px; left: 53.7%;" data-_destinationmiddle2="top: 0px; left: 14.5%;" data-_destinationoutstart="top: 0px; left: 14.5%;" data-_destinationoutend="top: -683px; left: 14.5%;" class="hotel" src="img/destination/hotel.png" />
			  <div class="copy" data-0="top: 90px; opacity: 0;" data-6300="opacity: 0;" data-6350="opacity: 1;" data-7400="opacity: 1;" data-7450="opacity: 0;">
			    <p class="pageTitle">{{{destinationTitle}}}</p>
			    <p>{{{destinationMessage}}}</p>
			  </div>
			</section>
			
			<section id="gifts">
			  <img data-0="top: 0px; left: 14.5%; opacity: 0;" data-9300="opacity: 0;" data-9350="opacity: 1;" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" src="img/gifts/ribbons.png" />
			  <img data-0="top: -683px; left: 14.5%; transform: rotate(0deg);" data-8300="top: -683px;" data-8500="top: 0px; transform: rotate(0deg);" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" src="img/gifts/gift3.png" />
			  <img data-0="top: -683px; left: 14.5%; transform: rotate(0deg);" data-8400="top: -683px;" data-8600="top: 0px; transform: rotate(0deg);" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" src="img/gifts/gift1.png" />
			  <img data-0="top: -683px; left: 14.5%; transform: rotate(0deg);" data-8500="top: -683px;" data-8700="top: 0px; transform: rotate(0deg);" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" src="img/gifts/gift2.png" />
			  <img data-0="top: -683px; left: 14.5%; transform: rotate(0deg);" data-8600="top: -683px;" data-8800="top: 0px; transform: rotate(0deg);" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" src="img/gifts/gift4.png" />
			  <img data-0="top: -683px; left: 14.5%; transform: rotate(0deg);" data-8700="top: -683px;" data-8900="top: 0px; transform: rotate(0deg);" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" src="img/gifts/gift5.png" />
			  <img data-0="top: -683px; left: 14.5%; transform: rotate(0deg);" data-8800="top: -683px;" data-9000="top: 0px; transform: rotate(0deg);" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" src="img/gifts/bag1.png" />
			  <img data-0="top: -683px; left: 14.5%; transform: rotate(0deg);" data-8900="top: -683px;" data-9100="top: 0px; transform: rotate(0deg);" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" src="img/gifts/gift6.png" />
			  <img data-0="top: -683px; left: 14.5%; transform: rotate(0deg);" data-9000="top: -683px;" data-9200="top: 0px; transform: rotate(0deg);" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" src="img/gifts/bag2.png" />
			  <img data-0="top: -683px; left: 14.5%; transform: rotate(0deg);" data-9100="top: -683px;" data-9300="top: 0px; transform: rotate(0deg);" data-_giftsoutstart="top: 0px;" data-_giftsoutend="top: -683px;" src="img/gifts/gift7.png" />
			  <div class="copy" data-0="top: 90px; opacity: 0;" data-9400="opacity: 0;" data-9450="opacity: 1;" data-10900="opacity: 1;" data-10950="opacity: 0;">
			    <p class="pageTitle">{{{giftsTitle}}}</p>
			    <p>{{{giftsMessage}}}</p>
			  </div>
			</section>
			
			<section id="contact">
			  <img data-0="top: 3000px; left: 14.5%;" data-_mailboxstart="top: 3000px;" data-_mailboxend="top: 0px;" src="img/contact/mailbox.png" />
			  <img data-0="top: 0px; left: 14.5%; opacity: 0;" data-_lettersstart="opacity: 0;" data-_lettersend="opacity: 1;" src="img/contact/letters.png" />
        <div class="copy" data-0="top: 90px; opacity: 0;" data-12300="opacity: 0;" data-12350="opacity: 1;">
			    <p class="pageTitle">{{{contactTitle}}}</p>
			    <p>{{{contactMessage}}}</p>
			  </div>
			</section>
			
		</div>
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
	<script type="text/javascript" src="js/skrollr.min.js"></script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/skrollr.ie.min.js"></script>
	<![endif]-->
	<script type="text/javascript">
	  function scrollToPage(page) {
	    switch( page ) {
	      case 'ourstory':
	        scroll(0,1000);
	        break;
	      case 'travel':
	        scroll(0,3100);
	        break;
	      case 'destination':
	        scroll(0,6350);
	        break;
	      case 'gifts':
	        scroll(0,9500);
	        break;
	      case 'contact':
	        scroll(0,12400);
	        break;
	      default:
	        break;
	    }
	  }
		$(document).ready(function() {
		  $(window).bind('hashchange', function(){
		    var page = window.location.hash;
		    page = page.substring(1);
		    scrollToPage(page);
		  });
		  $('body').css({
		    'height': $(window).height() + 13200
		  });
		  $('a.brand').click(function(event){
		    event.preventDefault();
		    scroll(0,0);
		  });
		  $('.nav .navlink').click(function(event){
		    //event.preventDefault();
		    var y = $(this).attr('id');
		    scroll(0,y);
		  });
		  //$(window).scroll(currentScroll);
		});
    var myConstants = {
      ourstorystartminus100: 750,
	    ourstorystart: 850,
	    ourstorydone: 1950,
	    ourstoryend: 2700,
	    travelstart: 2150,
	    travelstartplus50: 2200,
	    travelalmostdone: 2600,
	    traveldone: 3050,
	    travelend: 5300,
	    destinationbgstart: 4100,
	    destinationbgmiddle1: 4400,
	    destinationbgmiddle2: 4700,
	    destinationbgend: 5000,
	    destinationstart: 4600,
	    destinationmiddle1: 5050,
	    destinationmiddle2: 5600,
	    destinationmiddle3: 6000,
	    destinationend: 6250,
	    destinationoutstart: 7500,
	    destinationoutend: 8200,
	    gift1start: 8400,
	    gift1end: 8500,
	    gift2start: 8500,
	    gift2end: 8700,
	    gift3start: 8300,
	    gift3end: 8500,
	    gift4start: 8600,
	    gift4end: 8800,
	    gift5start: 8700,
	    gift5end: 8900,
	    gift6start: 8900,
	    gift6end: 9100,
	    gift7start: 9100,
	    gift7end: 9300,
	    bag1start: 8800,
	    bag1end: 9000,
	    bag2start: 9000,
	    bag2end: 9200,
	    ribbonsstart: 9300,
	    ribbonsend: 9350,
	    giftsoutstart: 11000,
	    giftsoutend: 11700,
	    mailboxstart: 11000,
	    mailboxend: 11800,
	    lettersstart: 12100,
	    lettersend: 12200
	  };
		var s = skrollr.init({
		  smoothScrolling: true,
		  forceHeight: false,
		  constants: myConstants
		});
		window.onload = function() {
		  skrollr.init({
		    smoothScrolling: true,
		    forceHeight: false,
  		  constants: myConstants
  		});
  		if( window.location.hash !== '' ) {
	      var page = window.location.hash;
		    page = page.substring(1);
		    scrollToPage(page);
	    }
		}
		function currentScroll() {
		  $('#scrollPos').text(window.pageYOffset);
		}
	</script>
</body>
</html>