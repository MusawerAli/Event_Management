<?php
	
	session_start();
	
	if (!isset($_SESSION['s_email'])&&!isset($_SESSION['s_uid'])) {
  
  header('Location:login.php');
  exit();
}

if(isset($_SESSION['od_id'])){
	
	
	
	
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order History</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","arrangement_data.php?q="+str,true);
xmlhttp.send();
}
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
<body id="page4">
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
                           </div> </div>";
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
    </header><div class="ic">More Website Templates  @ TemplateMonster.com - August22nd 2011!</div>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
       	  <div class="bg-top-2">
            <div class="bg">
              <div class="bg-top-shadow">
                <div class="main">
                  <div class="box p3" style="background-color:#FFFFD7">
                  <div class="trans" style="background-color:#FFFFD7">
                    <div class="container_12">
                         <table width="962" border="0" cellspacing="2" cellpadding="10"  >
  <tr>
  <td width="44" colspan=""> <br> </td>
  </tr>
  <tr>
  
    <th width="218" scope="row"  bgcolor="#000000"><a href="myprofile.php" target="_self"><img src="images/button (5).png" width="144" height="40"></a><br></th>
    <th width="179"  bgcolor="#000000"> <a href="select_event.php" target="_self"><img src="images/button (6).png" width="157" height="40"></a>
     <br> </td>
   
    <th width="239"  bgcolor="#000000"> <a href="#" target="_new"><img src="images/button (8).png" width="178" height="40"></a><br></th>
  </tr>
  <tr><td colspan="4"><br></td></tr>
</table> 
                      <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="p2">The order you placed is: </h3>
                                                    
  
    
    	<?php
				include "sams_event_db_connection.php";
				$sql="Select * From user_registration_table u, order_table o WHERE u.u_id='$_SESSION[s_uid]' AND u.u_id=o.u_id  ";	
				
				$rs = mysqli_query($con,$sql);
				$myrows = mysqli_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysqli_num_rows($rs)>0)
	{	
	echo
	 "<table width=600 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
  <th width=200 height=40 scope=row align=left>Content</th>
    <th width=200 height=40 scope=row align=left >Data</th>
   
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysqli_fetch_array($rs);
  echo "
  <tr>";
   echo "<tr><td ><b>Name</b></td><td>". $row['u_name']."</td></tr>";
   
        echo "<tr><td ><b>CNIC no.</b></td><td>".$row['u_cnic']."</td></tr>";
		echo "<tr><td><b>Contact no.</b></td><td>". $row['u_contact']."</td></tr>";
        echo "<tr><td ><b>Email</B></td><td>".$row['u_email']."</td></tr>";
		 echo "<tr><td ><b>Address</b></td><td>". $row['u_address']."</td></tr>";
        echo "<tr><td ><b>Order ID</B></td><td>".$row['order_id']."</td></tr>";
		echo "<tr><td ><b>Date Of Order</b></td><td>". $row['date_of_order']."</td></tr>";
        echo "<tr><td ><b>Time Of Order</b></td><td>".$row['time_of_order']."</td></tr>";
		 echo "<tr><td><b>Total Bill Payable</b></td><td>Rs. &nbsp;".$row['total_bill']."</td></tr>";
 
		//$_SESSION['event'] =$row['main_event_id'];
		$od_id=$row['order_id'];
	
	  $msql="Select * From event_order u, ordered_arrangements o WHERE (u.order_id='$od_id' AND o.order_id='$od_id') ";	
					
	$mrs = mysqli_query($con,$msql);
		$mrows = mysqli_num_rows($mrs);
				
	if(mysqli_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysqli_fetch_array($mrs);
		  echo "<tr><td ><b>Date of Event</b></td><td>".$mrow['date_of_event']."</td></tr>";
		 echo "<tr><td><b>Event Timings</b></td><td>". $mrow['event_timings']."</td></tr>";
        echo "<tr><td><b>Event Location</b></td><td>".$mrow['event_location']."</td></tr>";
		 echo "<tr><td ><b>No. of Guests</b></td><td>". $mrow['no_of_guests']."</td></tr>";
	}
	
	echo " <tr><td bgcolor=#FFCC99 colspan=3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
  </td>
  </tr>";
	}
  
	 
	}
	
	mysqli_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
                ?>                      
                                                    
                                                 <?php
			echo "<table><tr><td><br></td></tr></table>";
			?>     
                                                </div>
                                            </div>
                                        </div>

                       
                       
                               <div>
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
            	      <h3 class="p2">Our Events </h3>
                      <div class="wrapper">
   	    <figure class="img-indent frame2"><img src="images/pay.jpg" alt="" width="170"/></figure>
   	    <figure class="img-indent frame2"><img src="images/pay3.jpg" alt="" width="170"/></figure>
 	    </div>
          	      </article>
            	    <article class="grid_8">
            	    <h3 class="prev-indent-bot2">Online Event Management</h3>
            	    <div class="wrapper">
            	      <figure class="img-indent frame2"><img src="images/pay2.jpg" alt="" width="170"/></figure>
            	      <p class="prev-indent-bot color-4">We are facilitating you to choose the color, theme, decorations, menu, location and lighings for your own very Events just by registering on our website, Then login to your account and make your moments golden by selecting according to your choice!!
            	      No need to come personally to arrange the things , it all will be done by our dedicated and skilled staff!</p>
                      <p>Sam's Event managers are supervising diverse corporate events, such as product launches, press conferences, corporate anniversary parties, meetings, conferences, and marketing programs such as road shows and grand opening events.
                      </p>
                      <p class="prev-indent-bot color-4">

Sam's Evenst Organizers are handling a variety of specific event-related services, which can range from a few select services for clients with limited budgets, to handling all creative, technical and logistical aspects of an event.</p>
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
                        <div><a rel="nofollow" target="_blank" hrfhome.php">Sam's Hotels</a> by Samia Akhtar|</div>
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

