<?php
				include "sams_event_db_connection.php";
				$sql="Select * From arrangement_package ";	
				
				$rs = mysqli_query($con,$sql);
				$myrows = mysqli_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysqli_num_rows($rs)>0)
	{	
	echo
	 "<table width=821 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
    <th width=259 height=40 scope=row >Package Name</th>
    <th width=228 scope=row>Package Items</th>
    <th width=228 scope=row>Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysqli_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['arr_packg_name']."</th>";
	echo "<td width=266>".$row['arr_packg_items']."&nbsp; Menu Items</td>";
	echo "<td width=266>".$row['arr_packg_price']."</td>";
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
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
                ?>           