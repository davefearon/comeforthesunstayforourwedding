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
	<link href="css/style_relative.css" rel="stylesheet">
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
	<script type="text/javascript">
	//http://detectmobilebrowsers.com/ + tablets
	(function(a) {
		if(/android|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(ad|hone|od)|iris|kindle|lge |maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|playbook|silk/i.test(a)
		||
		/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))
		{
			//Add skrollr mobile on mobile devices.
			document.write('<script type="text/javascript" src="js/skrollr.mobile.min.js"><\/script>');
		}
	})(navigator.userAgent||navigator.vendor||window.opera);
	</script>
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