<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>     
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
<body id="page2">
	<!--==============================header=================================-->
    <header>
   <?php
if (!isset($_SESSION['s_uname'])){
                          echo "<div class=mybar id=L1 style=background-image:url(images/bg-top-tail2.jpg)> 
						  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <div class=menu>
     <div class=mylogout >
       <a href=login.php><strong>Register</strong></a> &nbsp; &nbsp; | &nbsp; &nbsp;
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
                                <li><a href="events.php">Events</a></li>
                                <li><a class="active"  href="portfolio.php">Our Portfolio</a></li>
                                
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
    </header><div class="ic"></div>
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="box p3">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                                <div class="wrapper">
                                                    <article class="grid_4 alpha">
                                                        <div class="indent">
                                                            <h3 class="prev-indent-bot2">Services We Provide</h3>
                                                            <ul class="list-2">
                                                                <li><a href="#">Planning and Layout of Events </a></li>
                                                                <li><a href="#">Arrangement and Decoration </a></li>
                                                                <li><a href="#">Catering and Food Presentation</a></li>
                                                                <li><a href="#">Themes for different occasions</a></li>
                                                                <li><a href="#">Complete Venue Decoration</a></li>
                                                                <li><a href="#">Sound Systems & DJs</a></li>
                                                                <li><a href="#">Marriage Bits and Party Favors </a></li>
                                                                <li><a href="#">Gifts and Bridal Packaging</a></li>
                                                                <li><a href="#">Video Film and Photography</a></li>
                                                                 <li><a href="#">Valet Parking</a></li>
                                                                <li><a href="#">Artistic Floral arrangements</a></li>
                                                                <li class="last-item"><a href="#">Bridal Bouquets</a></li>
                                                            </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                            <h3 class="p2">Our Profile</h3>
                                                            <div class="wrapper prev-indent-bot2">
                                                                <figure class="img-indent2 frame2"><img src="images/page2-img1.jpg" width="250" height="200"/></figure>
                                                                <div class="extra-wrap">
                                                                    <h6 class="prev-indent-bot">
                                                                    The time since Sam's Events Organizers have stepped into events management industry it's always liked and purely appreciated by the clients for our Services. </h6></div>

 <h6 class="prev-indent-bot">

 <p>Under Sam's dynamic and extra ordinary leadership, the company has come this long that the services speak for their quality and effects. The ambition of the company was to provide strategic guidance for the arrangement and management of events in a different way. We have been delivering finest services since 15 years and will keep serving you for lifetime.</p>

<h2>Current Position</h2>

<p>Sam's Events Organizers has managed to establish itself as one of the leading event organization company in Pakistan. Our staff includes the trained and specialized people. From making online registrations of orders to face to face meeting are entertained by this Company. Our efforts have become successful because of the fact that we take care of minute details regarding the events and hence try to give our best. For us event management is arranging a professional yet creative event by focusing on a target audience and therefore we go beyond what you desire.
<br></p>
 </div>
<ul class="list-2">
<li>Our all departments and vendors work in a team in order to provide best possible arrangements for all types of ceremonies;</li>
<li>We focus on evaluating the market research and recognizing the present needs of the events for managing event within budget.;</li>
<li> All the services are centered at the client`s requirements and desires, as we believe in working for our customers;</li>
<li> Our services are bespoke to suit you and unlike standard packages, we make your package, you choose what you would like our assistance with.</li>
</ul>
</p>
                                                          
                                                        </div>
                                                    </article>
                                                    <div class="container_12">
                            	                    <div class="wrapper">
                                                    <article class="grid_4">
                                    	<h3  class="text-1" >Our Mission</h3>
                                        <span>"Holding ourself to the highest of personal and business ethics and standards, and by continually challenging normal perceptions of excellence and creativity, we will meet, then exceed, your needs, desires and expectations.
In continuous partnership with you throughout all phases leading to your event and in providing spectacular weddings , corporate, entertainment and musical services, will culminate into a one-of-a-kind event life long memory."</span>
                                    </article>
                                    <article class="grid_4">
                                    	<h3  class="text-1">Current Projects and Services</h3>
                                        <span>Though the potency of Sam's Events Organizers remains with the wedding organization but we have gained much success and great range of experience by arranging various other events at social and corporate level. A complete package of services is given to the customers in a cost effective manner. It is our firm conviction that events do not have to be expensive rather they should be something amazing that is far above the expectations of the customers.</p></span>
                                    </article>
                                   <article class="grid_4">
                                    	<h3  class="text-1">We Insure </h3>
                                
                                        Our commitment towards work is a combination of innovation, understanding and experience of our team to enhance the value of your event.<br>
                                        
1.	Safety and security .<br>
2.	Attractive, Clean, comfortable venues and event locations.<br>
3.	Professional and friendly staff.<br>
4.	Well maintained facilities and astonishing decors.<br>
5.	Unparallel Services
</span>
                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                	
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
                        	<div class="indent-right2">
                                <h3 class="prev-indent-bot2">Here We Are!</h3>
                                <ul class="list-2">
                                 <li><a href="#">Venue Booking</a></li>
                                 <li><a href="#">Printing and Designing of Invitation Cards</a></li>
                                 <li><a href="#">Bridal Stages with Specific Décor & Theme</a></li>
                                    <li><a href="#">Decorated Horse Carriages</a></li>
                                    <li class="last-item"><a href="#">Advisory Services</a></li>
                                </ul>
                            </div>
                        </article>
                        <article class="grid_8">
                        	<h3 class="p2">We Say it Loud !</h3>
                            <div class="wrapper">
                            	<figure class="img-indent2 frame2"><img src="images/page2-img2.jpg" alt="" width="300"/></figure>
                                <div class="extra-wrap">
                                	<h6 class="p1">"The core values established by the Sam's Events Organizers over the years ago have served the clients very well".</h6>
                                   We are committed to being the best organizing and food service company in the world, by treating employees in ways that create extraordinary customer service and shareholder value.
                              </div>
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
</body>
</html>
