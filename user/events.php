<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Events</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script> 
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jcarousellite_1.0.1.js" type="text/javascript"></script>
    <script src="js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="js/jquery.opacityrollover.js" type="text/javascript"></script> 
    <script type="text/javascript">
		$(document).ready(function() { 
			$(".jCarouselLite").jCarouselLite({
				  btnNext: ".next",
				  btnPrev: ".prev",		  
				  speed: 400,		  
				  vertical: false,
				  circular: true,
				  easing:'easeOutQuart',
				  visible: 4,
				  start: 0,
				  scroll: 1
			 });
		});
	</script>    
	<!--[if lt IE 7]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
        </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page3">
	<!--==============================header=================================-->
    <header>
   
   <?php
if (!isset($_SESSION['s_uname'])){
                          echo "<div class=mybar id=L1 style=background-image:url(images/bg-top-tail2.jpg)> 
						  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <div class=menu>
     <div class=mylogout >
       <a href=register.php><strong>Register</strong></a> &nbsp; &nbsp; | &nbsp; &nbsp;
                                <a href=login.php><strong>Login</strong></a> 
</div></div></div>";     
    }
	
	
	else
	{ 
		$name= $_SESSION['s_uname'];
		
echo  "<div class=mybar id=L2 style=background-image:url(images/bg-top-tail2.jpg)>";
        echo "<div class=menu>";	
echo " &nbsp; &nbsp; Welcome $name ";
	echo " &nbsp; | &nbsp; <a href=myprofile.php ><strong>My Profile</strong></a>";
      
     echo" <div class=mylogout>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
       <a href=logout.php><strong>Logout</strong></a> &nbsp; &nbsp; 
</div>
                           <idiv> </div>";
          }
    ?>
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	<nav>
                            <ul class="menu">
                                 <li><a href="home.php">Home</a></li>
                                <li><a  class="active" href="events.php">Events</a></li>
                                <li><a href="portfolio.php">Our Portfolio</a></li>
                                
                            <li><a href="pricing.php">Prices</a></li>
                                <li><a href="contacts.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	<h1>
                            <a class="logo" href="home.php">Sam<strong>'s</strong></a>
                            <span>Event Organizers</span>
                        </h1>
                    </div>
                    <div class="grid_3">
                    	<form id="search-form" method="post" enctype="multipart/form-data">
                          <img src="images/pic-1.png" width="22" height="29"> <strong> (+92) 312-456789</strong>
                        </form>
                     </div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="gallery p3">
                            	<div class="wrapper indent-bot">
                                    <div id="gallery" class="content">
                                       <div class="wrapper">
                                           <div class="slideshow-container">
                                                <div id="slideshow" class="slideshow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="thumbs" class="navigation">
                                        <ul class="thumbs noscript">
                                            <li>
                                                <a class="thumb" href="images/gallery-img1.jpg" title=""> <img src="images/thumb-1.jpg" alt="" /><span></span> </a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="images/gallery-img2.jpg" title=""> <img src="images/thumb-2.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="images/gallery-img3.jpg" title=""> <img src="images/thumb-3.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="images/gallery-img4.jpg" title=""> <img src="images/thumb-4.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="images/gallery-img5.jpg" title=""> <img src="images/thumb-5.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="images/gallery-img6.jpg" title=""> <img src="images/thumb-6.jpg" alt="" /> <span></span></a>
                                            </li>           
                                        </ul>
                                    </div>
                                </div>
                                <div class="inner-2">
                                    <div class="wrapper">
                                        <span class="title t2 img-indent3">Our Events</span>
                                        <div class="extra-wrap indent-top2">
                                        	Since we have started organizing events , we have been doing best to provide un parallel facilities.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel">
                                <h3 class="color-1 p2">Most Liked Events</h3>
                                <a class="prev" href="#">Prev</a>
                                <a class="next" href="#">Next</a>
                                <div class="jCarouselLite">
                                    <ul id="carousel">
                                        <li><a href="#"><img src="images/page3-img1.jpg" alt="" width="200" height="121"/></a></li>
                                        <li><a href="#"><img src="images/page3-img2.jpg" alt="" /></a></li>
                                        <li><a href="#"><img src="images/page3-img3.jpg" alt="" /></a></li>
                                        <li><a href="#"><img src="images/page3-img4.jpg" alt="" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="bg-bot">
        	<div class="main">
            	<div class="container_12">
                	<div class="wrapper">
                    <article class="grid_4">
                        	<h3 class="prev-indent-bot2">Quick Links</h3>
                            <ul class="list-2">
                            <li><a href="#">Mehndi</a></li>
                            	<li><a href="#">Barat</a></li>
                                <li><a href="#">Walima</a></li>
                                <li><a href="#">Birthday Party</a></li>
                                <li><a href="#">Concerts</a></li>
                                <li><a href="#">Reunions</a></li>
                                
                                <li><a href="#">Fashion Shows</a></li>
                                <li class="last-item"><a href="#">Corporate Events</a></li>
                            </ul>
                        </article>
                    	<article class="grid_4">
                        	<div class="indent-right2">
                                <h3 class="prev-indent-bot">Sam's Event Organizers</h3>
                               
 <p class="color-4 prev-indent-bot">The Company offers a wide range of services provided by dedicated event management staff. It is to ensure the best planning and organization of each event covered by the company.</p>
 <p>Within a very short span of time, Sam's Event Organizers has made its place in the Pakistan`s top events planner and weddings organizers. All this has been made possible by the ultimate determination devoted to work. All the services are centered at the client`s requirements and desires, as we believe in working for our customers.</p>

<p class="color-4 prev-indent-bot">Our all departments and vendors work in a team in order to provide best possible arrangements for all types of ceremonies. Sam's Event Organizers focus on evaluating the market research and recognizing the present needs of the events for managing event within budget.</p>
                        </article>
                        <article class="grid_4">
                        	<h3 class="p2">Special Packages</h3>
                            <div class="wrapper">
                            	<figure class="img-indent frame2"><img src="images/page3-img5.jpg" alt="" /></figure>
                                
                                <figure class="img-indent frame2"><img src="images/page3-img6.jpg" alt="" /></figure>
           
                                
                            </div>
                        </article>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="container_12">
            	<div class="wrapper">
                	<div class="grid_4">
                    	<div>Registerd Web &copy; 2013 <a class="link color-3" href="#">Privacy Policy</a></div>
                        <div><a rel="nofollow" target="_blank" hrfhome.php">Sam's Events Organizers</a> by Samia Akhtar|</div>
                        <!-- {%FOOTER_LINK} -->
                    </div>
                    <div class="grid_4">
                    	<span class="phone-numb"><span>+(92)</span> 312-456789</span>
                    </div>
                    <div class="grid_4">
                    	<ul class="list-services">
                        	<li><img src="images/cooltext1148772876.png" width="279" height="39"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
			$(window).load(function() {
			// We only want these styles applied when javascript is enabled
			$('div.navigation').css({'width' : '320px', 'float' : 'right'});
			$('div.content').css('display', 'block');
	
			// Initially set opacity on thumbs and add
			// additional styling for hover effect on thumbs
			var onMouseOutOpacity = 0.5;
			$('#thumbs ul.thumbs li span').opacityrollover({
				mouseOutOpacity:   onMouseOutOpacity,
				mouseOverOpacity:  0.0,
				fadeSpeed:         'fast',
				exemptionSelector: '.selected'
			});
			
			// Initialize Advanced Galleriffic Gallery
			var gallery = $('#thumbs').galleriffic({
				delay:                     7000,
				numThumbs:                 12,
				preloadAhead:              6,
				enableTopPager:            false,
				enableBottomPager:         false,
				imageContainerSel:         '#slideshow',
				controlsContainerSel:      '',
				captionContainerSel:       '',
				loadingContainerSel:       '',
				renderSSControls:          true,
				renderNavControls:         true,
				playLinkText:              'Play Slideshow',
				pauseLinkText:             'Pause Slideshow',
				prevLinkText:              'Prev',
				nextLinkText:              'Next',
				nextPageLinkText:          'Next',
				prevPageLinkText:          'Prev',
				enableHistory:             true,
				autoStart:                 7000,
				syncTransitions:           true,
				defaultTransitionDuration: 900,
				onSlideChange:             function(prevIndex, nextIndex) {
					// 'this' refers to the gallery, which is an extension of $('#thumbs')
					this.find('ul.thumbs li span')
						.css({opacity:0.5})
				},
				onPageTransitionOut:       function(callback) {
					this.find('ul.thumbs li span').css({display:'block'});
				},
				onPageTransitionIn:        function() {
					this.find('ul.thumbs li span').css({display:'none'});
				}
			});
		});
	</script>
</body>
</html>
