<?php
	ob_start();
	session_start();
	
	if (!isset($_SESSION['s_username'])&&!isset($_SESSION['s_uid'])) {
  
  header('Location:admin_home.php');
  exit();
}
?>
<html>
<head>
</head>
<body>
  



 <?php
	$delid = $_REQUEST['delid'];
	include "sams_event_db_connection.php";
	$sql="Delete From arrangement_package WHERE arr_packg_id=$delid";
	$rs = mysqli_query($con,$sql);
	
	if($rs==1)
	
		
	{
		
	$sql = "DELETE FROM arrangement_packg_details WHERE arr_packg_id=$delid";
	
	$rs = mysqli_query($con,$sql);
	
	if($rs == 1)
	{
	header('Location:edit_arr.php');	
	}
	}
	
	?>
  
                </body>
                </html>