<?php	

session_start();
 $name= $_SESSION['uname'];

include("dbconnect.php");
$pid=$_REQUEST['pid'];
$amnt=$_REQUEST['price'];

$ins=mysqli_query($conn,"insert into addcart
values('','$name','0','$pid','0','0','0','0')");
if($ins){
?>

<script>
	alert("product added to your cart successfully");
		window.location.href="uhome.php"
		</script>
<?php	} ?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
