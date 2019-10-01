<html>
<head>
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
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>

<form>
 <?php  
  echo "<select name=users class=mydropdown onChange=showUser(this.value)>";
		include "sams_event_db_connection.php";
		$sql="Select * From arrangement_package";
		
		$rs = mysqli_query($con,$sql);
		$myrows =mysqli_num_rows($rs);
		//$_SESSION['$_aa']= $myrows;
	if(mysqli_num_rows($rs)>0)
	{
		
	while($row = mysqli_fetch_array($rs))
	{
		
	echo "<option value=" . $row['arr_packg_id'] . ">" . $row['arr_packg_name'] . "</option>";

	}
	mysqli_close($con);
	}
	  echo "</select>"; 
	  
               ?>                       
                                 
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>