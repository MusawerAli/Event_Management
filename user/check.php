<?php
	
	session_start();
	if (!isset($_SESSION['s_email'])&&!isset($_SESSION['s_uid'])) {
  
  header('Location:login.php');
  exit();
}
?>
<html>
<head>
 <title>YOur Order</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   

</head>
<body> 
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
                    	<form id="search-form" method="post" >
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
                  <div class="box p3" style="background-color:#FFFFD7">
                  <div class="trans" style="background-color:#FFFFD7">
                    <div class="container_12">
                         <table width="962" border="0" cellspacing="2" cellpadding="10"  >
  <tr>
  <td width="44" colspan=""> <br> </td>
  </tr>
 
  <tr><td colspan="4"><br></td></tr>
</table> 
                      <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="p2">You Have Placed the Order !</h3>
													
											
                                                    <?php
													
													///////////
													  include "sams_event_db_connection.php";
		$sql="Select * From menu_table where menu_packg_id='$_SESSION[menu]'";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
    $_SESSION['menu_pack_price']=$row['menu_price']; 	

	}
	mysqli_close($con);
	}




   
        include "sams_event_db_connection.php";
		$sql="Select * From beverage_packages where bev_packg_id= '$_SESSION[beverages]'";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
    $_SESSION['bev_pack_price']=$row['bev_packg_price']; 	

	}
	mysqli_close($con);
	}

               $_g=$_SESSION['guests'];

 
              $_c=$_SESSION['bev_pack_price'];
              $_d=$_SESSION['menu_pack_price'];

              $_p=$_SESSION['cur_bill'];
              
 
              $_Total_bill= $_p + ($_c * $_g) + ($_g * $_d);
 
	          $_SESSION['bill']=$_Total_bill;
	
	   		include "sams_event_db_connection.php";
		$sql = "UPDATE order_table SET total_bill='$_SESSION[bill]' WHERE order_id='$_SESSION[od_id]' AND u_id='$_SESSION[s_uid]'"; 
	
	
	
	$rs = mysqli_query($con,$sql);
	
	if($rs == 1)
	{
		
		
	}
			
													
													///////////
													
													?>
                                                    		
                             <?php
  
	  
	    include "sams_event_db_connection.php";
        $sql = "SELECT * FROM order_table o , event_order e WHERE (o.order_id='$_SESSION[od_id]' AND o.u_id='$_SESSION[s_uid]') AND (o.order_id=e.order_id)";
	
	$rs = mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
		$_SESSION['s_time']=$row['event_timings'];
		$_SESSION['s_loc']=$row['event_location'];
		$_SESSION['s_evdate']= $row['date_of_event'];
    	$_SESSION['time']=$row['time_of_order'];
		$_SESSION['dateof or']=$row['date_of_order'];
		$_SESSION['main_evenet_id']=$row['main_event_id'];
		$_SESSION['guests']=$row['no_of_guests'];
		$_SESSION['event_id']=$row['event_id'];
		
			}
	
	}
	
	
	  include "sams_event_db_connection.php";
        $sql = "SELECT * FROM ordered_arrangements o , ordered_menu e WHERE o.order_id='$_SESSION[od_id]' AND (o.order_id=e.order_id)";
	
	$rs = mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
		
		$_SESSION['arr_packg_id']=$row['arr_packg_id'];
		$_SESSION['dec_packg_id']=$row['dec_packg_id'];
		$_SESSION['theme_id']=$row['theme_id'];
		$_SESSION['menu_packg_id']=$row['menu_packg_id'];
		$_SESSION['bev_packg_id']=$row['bev_packg_id'];
		
	}
	}
	
	 include "sams_event_db_connection.php";
        $sql = "SELECT * FROM events_table WHERE main_event_id=$_SESSION[main_evenet_id]";
	
	$rs = mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
		
		
		
		$_SESSION['main_event']=$row['main_event_name'];
		
			}
	
	}
	
	 include "sams_event_db_connection.php";
        $sql = "SELECT * FROM event_themes WHERE theme_id=$_SESSION[theme_id]";
	
	$rs = mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		

		
		$_SESSION['theme_name']=$row['theme_name'];
		
			}
	
	}
	include "sams_event_db_connection.php";
        $sql = "SELECT * FROM event_type WHERE event_id=$_SESSION[event_id]";
	
	$rs = mysqli_query($con,$sql);
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
	
		
		$_SESSION['main_event_name']=$row['event_name'];
		
			}
	
	}
	
	echo "<table width=600 align=center><tr><td width= 200><br><strong>Name</strong></td><td width= 200><br>".$_SESSION['s_uname']."</td></tr>";
	echo "<tr><td><strong>Your Order ID </strong></td><td>".$_SESSION['od_id']."</td></tr>";
	echo "<tr><TD width= 200> <strong>Order Time &nbsp; </strong></td><td width= 200>".$_SESSION['time']."</td></tr>";
	echo "<tr><TD width= 200> <strong>Date of Order &nbsp;</strong></td><td width= 200>"	.$_SESSION['dateof or']."</td></tr>";
	echo "<tr><TD width= 200><strong>Timing Of Event &nbsp;</strong></td><td width= 200> ".$_SESSION['s_time']."</td></tr>";
	echo "<tr><TD width= 200><strong>Location Of Event &nbsp;</strong></td><td width= 200> ".$_SESSION['s_loc']."</td></tr>";
	echo "<tr><TD width= 200><strong> Date of Event &nbsp;</strong></td><td width= 200>"	.$_SESSION['s_evdate']."</td></tr>";
    	
		
		echo "<tr><TD width= 200><strong> No of Guests &nbsp;</strong></td><td width= 200>".$_SESSION['guests']."</td></tr>";
		echo "<tr><TD width= 200> <strong>Type of Event &nbsp;</strong></td><td width= 200> ".$_SESSION['main_event']."</td></tr>";
		echo "<tr><TD width= 200> <strong>Theme of Event &nbsp;</strong></td> <td width= 200>".$_SESSION['theme_name']."</td></tr>";
		
		
		
		
		
		 include "sams_event_db_connection.php";
		$sql="Select * From ordered_hr h, hr_table t where h.order_id='$_SESSION[od_id]' AND h.hr_id=t.hr_id";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		echo "<tr><TD width= 200> <strong>".$row['hr_name']."&nbsp;</strong></td> <td width= 200>Rs. &nbsp;". $row['hr_price']."</td></tr>";
	 

	}
	mysqli_close($con);
	}
	echo "<tr><TD width= 200> <strong>Your Total Bill &nbsp;</strong></td> <td width= 200>Rs. &nbsp;".$_SESSION['bill']."<br></td></tr>";
		
	echo " <tr><td colspan=2 align=center width=600><br><strong>Your Order Details are :</strong><br></td></tr>";
	echo "</table>";
	include "sams_event_db_connection.php";
				$sql="Select * From arrangement_package where arr_packg_id=$_SESSION[arr_packg_id]";	
				
				$rs = mysqli_query($con,$sql);
				$myrows = mysqli_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysqli_num_rows($rs)>0)
	{	
	echo
	 "<table width=828 border=0 cellspacing=2 cellpadding=10 align=center>
	 <tr><td colspan=3><strong>Arrangement Package You Selected!</strong></td></tr>
	 
  <tr>
    <th width=259 height=40 scope=row ><br>Package Name</th>
    <th width=228 scope=row align=left><br> Package Items</th>
    <th width=228 scope=row align=left><br> Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysqli_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['arr_packg_name']."</th>";
	echo "<td width=266>".$row['arr_packg_items']."&nbsp; Package Items</td>";
	echo "<td width=266> &nbsp; Rs.".$row['arr_packg_price']."  </td>";
	echo "</tr>";
	  $dec_id= $row['arr_packg_id'];
	  /*echo $dec_id;
	  
	  echo "<br>";*/
	  
	  $msql="Select * From event_arrangements e , arrangement_packg_details d where arr_packg_id=$dec_id AND e.arrangement_id=d.arrangement_id";	
					
	$mrs = mysqli_query($con,$msql);
		$mrows = mysqli_num_rows($mrs);
				 /*echo $mrows;
				 echo "<br>" ;	*/		
	if(mysqli_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysqli_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=228 colspan=3 align=left>".$mrow['material_name']."</td>
    
  </tr>";
  
		
	}
	}
  
	 
	}
	
	mysqli_close($con);
	
	
	
echo "<tr><td><br></td></tr></table>";
	}
	
	include "sams_event_db_connection.php";
				$sql="Select * From  decoration_packages where dec_packg_id=$_SESSION[dec_packg_id]";	
				
				$rs = mysqli_query($con,$sql);
				$myrows = mysqli_num_rows($rs);
				
	if(mysqli_num_rows($rs)>0)
	{	
	echo
	 "<table width=828 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr><td colspan=3><strong>Decortion Package You Selected!</strong></td></tr>
  <tr>
    <th width=259 height=40 scope=row ><br>Package Name</th>
    <th width=228 scope=row align=left><br> Package Items</th>
    <th width=228 scope=row align=left><br> Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysqli_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['dec_packg_name']."</th>";
	echo "<td width=266 >".$row['dec_packg_items']."&nbsp; Package Items</td>";
	echo "<td width=266>Rs. &nbsp;".$row['dec_packg_price']."</td>";
	echo "</tr>";
	  $dec_id= $row['dec_packg_id'];
	  
	  $msql="Select * From decoration_pckg_details d , decoration_details e where d.dec_packg_id=$dec_id AND d.dec_id=e.dec_id";	
					
	$mrs = mysqli_query($con,$msql);
		$mrows = mysqli_num_rows($mrs);
						
	if(mysqli_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysqli_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=228 colspan=3 align=left>".$mrow['dec_type_name']."</td>
    
  </tr>";
  
		
	}
	}
  
	 
	}
	
	mysqli_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
  ?>
                <?php      
       
				include "sams_event_db_connection.php";
				$sql="Select * From menu_table where menu_packg_id=$_SESSION[menu_packg_id] ";	
				
				$rs = mysqli_query($con,$sql);
				$myrows = mysqli_num_rows($rs);
				 
	if(mysqli_num_rows($rs)>0)
	{	
	echo
	 "<table width=821 border=0 cellspacing=2 cellpadding=10 align=center>
	  <tr><td colspan=3><strong>Food Package You Selected!</strong></td></tr>
  <tr>
    <th width=259 height=40 scope=row ><br>Package Name</th>
    <th width=228 scope=row align=left> <br>Package Items</th>
    <th width=228 scope=row align=left><br>Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysqli_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['menu_package']."</th>";
	echo "<td width=266>".$row['menu_package_items']."&nbsp; Menu Items</td>";
	echo "<td width=266> Rs. &nbsp;".$row['menu_price']."</td>";
	echo "</tr>";
	  $dec_id= $row['menu_packg_id'];
	  /*echo $dec_id;
	  
	  echo "<br>";*/
	  
	  $msql="Select * From menu_details d , menu_packg_details m where menu_packg_id=$dec_id AND d.menu_detail_id=m.menu_detail_id";	
					
	$mrs = mysqli_query($con,$msql);
		$mrows = mysqli_num_rows($mrs);
				 /*echo $mrows;
				 echo "<br>" ;	*/		
	if(mysqli_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysqli_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=228 colspan=3 align=left>".$mrow['package_item']."</td>
    
  </tr>";
  
		
	}
	}
  
	 
	}
	
	mysqli_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}

     ?>
     
      <?php

                
				
				include "sams_event_db_connection.php";
				$sql="Select * From beverage_packages where bev_packg_id=$_SESSION[bev_packg_id] ";	
				
				$rs = mysqli_query($con,$sql);
				$myrows = mysqli_num_rows($rs);
				 
	if(mysqli_num_rows($rs)>0)
	{	
	echo
	 "<table width=821 border=0 cellspacing=2 cellpadding=10 align=center>
	  <tr><td colspan=3><strong>Beverage Package You Selected!</strong></td></tr>
  <tr>
    <th width=259 height=40 scope=row ><br>Package Name</th>
    <th width=228 scope=row align=left><br>Package Items</th>
    <th width=228 scope=row align=left><br> Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysqli_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['bev_packg_name']."</th>";
	echo "<td width=266 >".$row['bev_packg_items']."&nbsp; Package Items</td>";
	echo "<td width=266>Rs. &nbsp; ".$row['bev_packg_price']."</td>";
	echo "</tr>";
	  $dec_id= $row['bev_packg_id'];
	  /*echo $dec_id;
	  
	  echo "<br>";*/
	  
	  $msql="Select * From bev_packg_details b , beverages_table d where b.bev_packg_id=$dec_id AND b.beverage_id=d.beverage_id";	
					
	$mrs = mysqli_query($con,$msql);
		$mrows = mysqli_num_rows($mrs);
				 /*echo $mrows;
				 echo "<br>" ;	*/		
	if(mysqli_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysqli_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=228 colspan=3 align=left>".$mrow['beverage_name']."</td>
    
  </tr>";
  
		
	}
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
          	      </article>
            	    <article class="grid_8">
            	    <h3 class="prev-indent-bot2">Online Event Management</h3>
                    <div class="wrapper">
   	    <figure class="img-indent frame2"><img src="images/pay.jpg" alt="" width="170"/></figure>
   	    <figure class="img-indent frame2"><img src="images/pay3.jpg" alt="" width="170"/></figure>
 	    </div>
            	    <div class="wrapper">
            	      <figure class="img-indent frame2"><img src="images/pay2.jpg" alt="" width="170"/></figure>
            	      <p class="prev-indent-bot color-4">We are facilitating you to choose the color, theme, decorations, menu, location and lighings for your own very Events just by registering on our website, Then login to your account and make your moments golden by selecting according to your choice!! </p>
            	      <p class="prev-indent-bot">No need to come personally arrange the things , it all will be done by our dedicated and skilled staff!</p>
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