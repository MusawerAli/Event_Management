<?php
	
	session_start();
	
	
	if (!isset($_SESSION['s_email'])&&!isset($_SESSION['s_uid'])) {
  
  header('Location:login.php');
  exit();
} 

	
	include "sams_event_db_connection.php";
	$sql1="Select order_id From order_table WHERE u_id=$_SESSION[s_uid]";
    	$rs = mysqli_query($con,$sql1);
		if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
	    $_SESSION['od_id']=$row['order_id'];
	
	
			}
	}

?>
<html>
<head>
 <title>Place Order</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   

<script src="menu_page.js" type="text/javascript">

</script>
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
                          <img src="images/pic-1.png" width="22" height="29"> <strong>(+92) 312-456789</strong>
                        </form>
                     </div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header><div class="ic"></div>
    <section id="content">
        <div class="bg-top">
       	  <div class="bg-top-2">
            <div class="bg">
              <div class="bg-top-shadow">
                <div class="main">
                  <div class="box p3" style="background-color:#FFFFD7">
                  <div class="trans" style="background-color:#FFFFD7">
                    <div class="container_12">
                   <div class="wrapper">
                                            <div class="grid_12">
                                                 <div class="indent-left">
                                                	<h3 class="p2">Select Food and Beverages!</h3>
	
            <?php
            echo "<table><tr><td><br><br><td><tr></table>";
            ?>
                                                    <form name="menu_order" id="contact-form" method="post" enctype="multipart/form-data">                    												
	 <?php
					   
	if(isset($_REQUEST['img_submit2_x']))
	
	
	{        	
		$_SESSION['menu'] = $_REQUEST['my_menu'];
        $_SESSION['beverages'] = $_REQUEST['beverages'];
	    
		echo $_SESSION['menu'];
		
	include "sams_event_db_connection.php";
	 	
	$sql = "INSERT INTO ordered_menu SET order_id='$_SESSION[od_id]',  menu_packg_id=' $_REQUEST[my_menu]', bev_packg_id=' $_REQUEST[beverages]'";
	
	$rs = mysqli_query($con,$sql);
	
	if($rs == 1)
	{
		
		$_SESSION['menu'] = $_REQUEST['my_menu'];
        $_SESSION['beverages'] = $_REQUEST['beverages'];
	    
echo "<tr><td><h2>Record Inserted<h2></td></tr>";
     header('Location:check.php');	
	

	}
	
	
	else{
		
		echo "<tr><td>Failed to insert!</td></tr>";
	}
	mysqli_close($con);	
	//include "total_bill.php";
	
	}
	
	?>
                                                    <?php
													 include "sams_event_db_connection.php";
													
		$sql="Select * From decoration_packages where dec_packg_id='$_SESSION[deco_pack]' ";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
    $_SESSION['deco_pack_price']=$row['dec_packg_price']; 	

	}
	mysqli_close($con);
	}

?>

<?php

include "sams_event_db_connection.php";
		$sql="Select * From arrangement_package where arr_packg_id= $_SESSION[arrangement_pack]";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
    $_SESSION['arr_pack_price']=$row['arr_packg_price']; 	

	}
	mysqli_close($con);
	}

?>

<?php

    $_a=$_SESSION['deco_pack_price'];
    $_b=$_SESSION['arr_pack_price'];
    $_hr=$_SESSION['hr_rate'];
	$_cur_bill= $_a + $_b + $_hr;
	$_SESSION['cur_bill']= $_cur_bill;

													echo "<Table width=950 align=center></td><td width =950 bgcolor=white align=center><br><br><h2><marquee>Your Bill till now is &nbsp; = &nbsp; Rs. &nbsp; ".$_cur_bill."</marquee></h2><br><br></td></tr>
													</table>";
													?>
                                                    
                                                        <fieldset>
                                                              
                                                          <label> <span class="text-form"> <strong> Select Menu </strong> </span>
                                                      <?php  
  echo "<select name=my_menu class=mydropdown onChange=showData3(this.value)>";
		include "sams_event_db_connection.php";
		$sql="Select * From menu_table where main_event_id=$_SESSION[event_name_id]";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
	echo "<option value=" . $row['menu_packg_id'] . ">" . $row['menu_package'] . "</option>";
  // $_SESSION['bb']=$row['menu_packg_id'];
	}
	mysqli_close($con);
	}
	  echo "</select>"; 
	  
               ?></label> 
               <div class="mypackages" id="txtHint3" >
                                    
                                    
                                     <?php
             
			 include "sams_event_db_connection.php";
		$sql="Select * From menu_table where main_event_id=$_SESSION[event_name_id]";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		
	if(mysqli_num_rows($rs)>0)
	{
		
	$row = mysqli_fetch_array($rs);
	for($t=1;$t<=1;$t++)
	{	
	
   $_SESSION['bb']=$row['menu_packg_id'];
	}
	mysqli_close($con);
	}
			 
			 
				include "sams_event_db_connection.php";
				$sql="Select * From menu_table where main_event_id=$_SESSION[event_name_id] AND menu_packg_id=$_SESSION[bb] ";	
				
				$rs = mysqli_query($con,$sql);
				$myrows = mysqli_num_rows($rs);
				 
	if(mysqli_num_rows($rs)>0)
	{	
	echo
	 "<table width=821 border=0 cellspacing=2 cellpadding=10 align=center>
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
                                     
                                     </div>  
                                       <?php
			echo "<table><tr><td><br></td></tr></table>";
			?>   
                                                          <label><span class="text-form"><strong>Beverages or Drinks</strong> </span><?php  
  echo "<select name=beverages class=mydropdown onChange=showData4(this.value)>";
		include "sams_event_db_connection.php";
		$sql="Select * From  beverage_packages where main_event_id=$_SESSION[event_name_id]";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		//$_SESSION['$_aa']= $myrows;
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
	echo "<option value=" . $row['bev_packg_id'] . ">" . $row['bev_packg_name'] . "</option>";

	}
	mysqli_close($con);
	}
	  echo "</select>"; 
	  
               ?></label>          
               <div class="mypackages" id="txtHint4" >
   <?php
     include "sams_event_db_connection.php";
		$sql="Select * From beverage_packages where main_event_id=$_SESSION[event_name_id]";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		
	if(mysqli_num_rows($rs)>0)
	{
		
	$row = mysqli_fetch_array($rs);
	for($t=1;$t<=1;$t++)
	{	
	
   $_SESSION['aa']=$row['bev_packg_id'];
	}
	mysqli_close($con);
	}
                
				
				include "sams_event_db_connection.php";
				$sql="Select * From beverage_packages where bev_packg_id=$_SESSION[aa] ";	
				
				$rs = mysqli_query($con,$sql);
				$myrows = mysqli_num_rows($rs);
				 
	if(mysqli_num_rows($rs)>0)
	{	
	echo
	 "<table width=821 border=0 cellspacing=2 cellpadding=10 align=center>
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



   </div>    
   <?php
			echo "<table><tr><td><br></td></tr></table>";
			?>           
                                                          
                              
                                                               <div class="buttons" align="center"> <table width="354" align="center"> <tr><td width="155" align="right">
                         <input type="image" name="img_submit2" src="images/button (2).png"></td>
<td width="101" align="right">  <input type="image"  src="images/button (1).png" name="img_reset" ></td></tr></table>
                                            </div>
                                                                  
                                                                   <?php
			echo "<table><tr><td><br></td></tr></table>";
			?>  
            </fieldset>
            </form>              
            
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

