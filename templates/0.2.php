<!DOCTYPE html>
<html lang="{{{language}}}">
<head>
  <meta charset="utf-8">
	<title>{{title}}</title>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="800">
	<meta name="viewport" content="width=800, initial-scale=1">
	<meta http-equiv="cleartype" content="on">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="purple">
	<meta name="apple-mobile-web-app-title" content="{{{brand}}}">
        
	<meta name="description" content="{{{metaDescription}}}">
	<meta name="author" content="{{{metaAuthor}}}">
	<!-- Le styles -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript">
	  window.onload = function() {
	    if( window.location.hash !== '' ) {
	      var page = window.location.hash;
		    page = page.substring(1);
	    }
  	  var viewport = document.getElementsByName('viewport')[0];
  	  viewport.content = 'width=800, initial-scale=' + Math.round( (window.innerWidth / 800) * 100 ) / 100;
	  };
	</script>
</head>
<body>
  <span id="top"></span>

  <div class="container">
    <div class="flags">
      <div class="pull-right">
        <a href="/en"><img src="img/extras/flags/ca.png" /></a>
        <a href="/it"><img src="img/extras/flags/it.png" /></a>
        <!-- <a href="/ru"><img src="img/extras/flags/ru.png" /></a> -->
      </div>
    </div>
    
    <header id="header">
      <div class="navbar">
        <div class="navbar-inner">
          <ul class="nav">
            <li><a class="navlink" id="1000" href="#ourstory">{{{nav_OurStory}}}</a></li>
            <li><a class="navlink" id="3100" href="#travel">{{{nav_Travel}}}</a></li>
            <li><a class="navlink" id="6350" href="#destination">{{{nav_Destination}}}</a></li>
            <li><a class="navlink" id="9500" href="#gifts">{{{nav_Gifts}}}</a></li>
            <li><a class="navlink" id="12400" href="#contact">{{{nav_Contact}}}</a></li>
          </ul>
        </div>
      </div>
    </header>
		
		<div id="main" role="main">
		
		  <section id="welcome">
		    <!--
 			  <p>
			    {{{welcomeMessage}}}
			  </p>
			  -->
			</section>
			
			<section id="ourstory">
  			<div class="pageTitle">{{{ourstoryTitle}}}</div>
  			
  			<div class="toparrow"></div>
  			
			  <div class="copy">
			    {{{ourstoryMessage}}}
			  </div>
			</section>
			
			<section id="travel">
  			<div class="pageTitle">{{{travelTitle}}}</div>
  			
  			<div class="toparrow"></div>
  			
			  <div class="copy">
			    {{{travelMessage}}}
			  </div>
			</section>
			
			<section id="destination">
  			<div class="pageTitle">{{{destinationTitle}}}</div>
  			
  			<div class="toparrow"></div>
  			
			  <div class="copy">
			    {{{destinationMessage}}}
			  </div>
			</section>
			
			<section id="gifts">
  			<div class="pageTitle">{{{giftsTitle}}}</div>
  			
  			<div class="toparrow"></div>
  			
			  <div class="copy">
			    {{{giftsMessage}}}
			  </div>
			</section>
			
			<section id="contact">
  			<div class="pageTitle">{{{contactTitle}}}</div>
  			
  			<div class="toparrow"></div>
  			
			  <div class="copy">
			    {{{contactMessage}}}
			  </div>
			</section>
			
		</div> <!-- /main -->
		
		<footer id="footer">
  		{{{footerMessage}}}
		</footer>

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
		  });
		  $('a.brand').click(function(event){
		    event.preventDefault();
		    scroll(0,0);
		  });
		  $('.toparrow').click(function(event){
  		  event.preventDefault();
  		  if( window.location.hash !== '' ) {
  		    window.location.hash = '';
  		  }
		    scroll(0,0);
		  });
		});
	</script>
</body>
</html>