<?php
$ev=$_GET["ev"];

              include "sams_event_db_connection.php";
				$sql="Select * From events_table where main_event_id='".$ev."'";	
				
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



