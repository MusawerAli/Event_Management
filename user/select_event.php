<?php
	
	session_start();
	if (!isset($_SESSION['s_email'])&&!isset($_SESSION['s_uid'])) {
  
  header('Location:login.php');
  exit();
}
?>
<html>
<head>
 <title>Place Order</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
   
  <script>
function showData6(str)
{
if (str=="")
  {
  document.getElementById("txtHint6").innerHTML="";
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
    document.getElementById("txtHint6").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","event_name_data.php?ev="+str,true);
xmlhttp.send();
}
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
                                                	<h3 class="p2">Choose your event to  proceed</h3>
													
													
                             <?php
  if(isset($_REQUEST['img_submit3_x']))
	
	{ 
	$dt=date("Y-m-d");
    $t=date(" h:i A");
	define('TIMEZONE', 'Asia/Karachi');
    $msqldt =  (str_replace('/', '-', $dt));
	
	 $_SESSION['event_name_id'] = $_REQUEST['event_name'];
	 $_eid=$_SESSION['event_name_id'];
	  
	  
	    include "sams_event_db_connection.php";
        $sql = "INSERT INTO order_table SET u_id='$_SESSION[s_uid]' ,main_event_id='$_eid', date_of_order='$dt' , time_of_order='$t'"; 
	
	$rs = mysqli_query($con,$sql);
	
	if($rs == 1)
	{
		
		if( $_SESSION['event_name_id'] == 4){
		echo "<tr><td>Data Inserted</td><tr>" ;
	header('Location:fashion_order.php');
		}
		
		if( $_SESSION['event_name_id'] == 3){
		echo "<tr><td>Data Inserted</td><tr>" ;
	header('Location:party_order.php');
		}
		
		if( $_SESSION['event_name_id'] == 2){
		echo "<tr><td>Data Inserted</td><tr>" ;
	header('Location:corporate_order.php');
		}
		else if( $_SESSION['event_name_id'] == 1){
		header('Location:order_page.php');	
		}
	}
	
	
	 
	}
  ?>
                      
 
  <form name="select_event" method="post" id="contact-form" action="">
  
  <label><span class="text-form"> <strong> </strong></span>
      <?php
	
	echo "<select name=event_name class=mydropdown onChange=showData6(this.value)>";
		include "sams_event_db_connection.php";
		$sql="Select * From events_table";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
	echo "<option value=" . $row['main_event_id'] . ">" . $row['main_event_name'] . "</option>";

	}
	mysqli_close($con);
	}
	  echo "</select>"; 
	  
               ?>
               
             
               </label>
                <div class="mypackages" id="txtHint6">
                <?php


              include "sams_event_db_connection.php";
				$sql="Select * From events_table where main_event_id=1";	
				
				$rs = mysqli_query($con,$sql);
				$myrows = mysqli_num_rows($rs);
				
	if(mysqli_num_rows($rs)>0)
	{	
	echo
	 "<table width=828 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
    <th width=259 height=40 scope=row ><br>Event Type Name</th>
    
    <th width=228 scope=row align=left><br>Events Included</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysqli_fetch_array($rs);
  echo "
  <tr>
 
    <th height=30 scope=row valign=top>".$row['main_event_name']."</th></tr>";
	
	
	
	  $dec_id= $row['main_event_id'];
	 
	  
	  $msql="Select * From events_table e , event_type d where e.main_event_id=$dec_id AND e.main_event_id=d.main_event_id";	
					
	$mrs = mysqli_query($con,$msql);
		$mrows = mysqli_num_rows($mrs);
					
	if(mysqli_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysqli_fetch_array($mrs);
		 echo "<tr><td width=288></td>
		 <td width=228 colspan=3 align=left>".$mrow['event_name']."</td>
    
  </tr>";
  
		
	}
	}
  
	 
	}
	
	mysqli_close($con);
	
	
	
echo "<tr><td><br></td></tr></table>";
	}
	
	echo "</div>";



?>
                </div>
               <br>
                <div align="center">  
     <input type="image"  src="images/button (2).png" name="img_submit3">
                                            </div>                
         </fieldset>	
               
               
           </form>                 
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

