					
						<?php
						
					// echo $_SESSION['id'];
						/*$j=1;
						for($i=0; $i<$_SESSION['$_aa']; $i++){
							
							echo $j;
							$j++;
							
						}*/
						echo "<div class=mypackages id=pack1 style=visibility:default>";
						
						
				include "sams_event_db_connection.php";
				$sql="Select * From arrangement_package where arr_packg_id=1";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=828 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
    <th width=259 height=40 scope=row ><br>Package Name</th>
    <th width=228 scope=row align=left><br> Package Items</th>
    <th width=228 scope=row align=left><br> Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['arr_packg_name']."</th>";
	echo "<td width=266>".$row['arr_packg_items']."&nbsp; Menu Items</td>";
	echo "<td width=266> &nbsp; Rs.".$row['arr_packg_price']."  </td>";
	echo "</tr>";
	  $dec_id= $row['arr_packg_id'];
	  /*echo $dec_id;
	  
	  echo "<br>";*/
	  
	  $msql="Select * From event_arrangements e , arrangement_packg_details d where arr_packg_id=$dec_id AND e.arrangement_id=d.arrangement_id";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
				 /*echo $mrows;
				 echo "<br>" ;	*/		
	if(mysql_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysql_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=228 colspan=3 align=left>".$mrow['material_name']."</td>
    
  </tr>";
  
		
	}
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br></td></tr></table>";
	}
	
	echo "</div>";
	
	
	echo "<div class=mypackages id=pack2 style=visibility:none";
	
	                    $_SESSION['id']=$_REQUEST['myid'];
						$_id=$_SESSION['id'];
						
				include "sams_event_db_connection.php";
				$sql="Select * From arrangement_package where arr_packg_id=$_id";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=828 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
    <th width=259 height=40 scope=row ><br>Package Name</th>
    <th width=228 scope=row align=left><br> Package Items</th>
    <th width=228 scope=row align=left><br> Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['arr_packg_name']."</th>";
	echo "<td width=266>".$row['arr_packg_items']."&nbsp; Menu Items</td>";
	echo "<td width=266> &nbsp; Rs.".$row['arr_packg_price']."  </td>";
	echo "</tr>";
	  $dec_id= $row['arr_packg_id'];
	  /*echo $dec_id;
	  
	  echo "<br>";*/
	  
	  $msql="Select * From event_arrangements e , arrangement_packg_details d where arr_packg_id=$dec_id AND e.arrangement_id=d.arrangement_id";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
				 /*echo $mrows;
				 echo "<br>" ;	*/		
	if(mysql_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysql_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=228 colspan=3 align=left>".$mrow['material_name']."</td>
    
  </tr>";
  
		
	}
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br></td></tr></table>";
	}
	
	echo "</div>";
	
	?>

						