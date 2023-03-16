<?php
	include("dbconnect.php");
	 $bid=$_REQUEST['bid'];
	 $oid=$_REQUEST['oid'];
	 $quan=$_REQUEST['quan'];
		$qt=mysqli_query($conn,"update addcart set status='2' where id='$oid'");
		//$qty=mysqli_query($conn,"select quantity from product where id=$bid");
		//$qty1=mysqli_fetch_array($qty);
		//$qty2=$qty1['quantity'];
		//$balance=$qty2-$quan;
		//$update=mysqli_query($conn,"update product set quantity='$balance' where id='$bid'");
		header("location:viewo.php");
		?>
		<script>
		
		//alert("delivered successfully");
		
		</script>
	
		
		
		
		


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
