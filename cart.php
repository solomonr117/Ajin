<?php
include("dbconnect.php");
session_start();
extract($_POST);
$reg= $_SESSION['uname'];
if(isset($btn))
{
$amount=0;
$mq2=mysqli_query($conn,"select max(orderid) from addcart");
$mr2=mysqli_fetch_array($mq2);
$order=$mr2['max(orderid)']+1;
	for($i=0;$i<count($gid);$i++)
	{
	$amt=$price[$i]*$qty[$i];
	$amount+=$amt;
	mysqli_query($conn,"update addcart set price=$price[$i],quantity=$qty[$i],amount=$amt,status=1,orderid=$order where id=$gid[$i]");
	
	
	
	
	}

header("location:payment.php?id=".$order);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pomato</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	 
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                          <li class="active"> <a href="uhome.php">Home</a> </li>
                                        <li> <a href="cart.php">Cart</a> </li>
                                        <li><a href="orders.php">Order Details</a></li>
                                        <li><a href="index.php">Logout</a></li>
                                        
                                        <li class="last">
                                            <a href="#"><img src="images/search_icon.png" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
					   </div>
                    </div>
					 </div>
					   </div>
                    </div>
<div>
<img src="images\img.jpg" style="width:100%;height:400px;">
</div>
	<br>
	 <br>
	  <br>

<form name="form1" method="post" action="">
	<table width="801" border="1" align="center" cellpadding="5">
      <tr>
        <th width="81" scope="col">Image</th>
        <th width="81" scope="col">Product Name</th>
        <th width="128" scope="col">Price</th>
        <th width="171" scope="col">Quantity</th>
        <th width="171" scope="col">Action</th>
      </tr>
      <?php
	$q1=mysqli_query($conn,"select * from addcart where reg='$reg' && status=0");
   $num=mysqli_num_rows($q1);
  if($num>0)
  {  
	while($r1=mysqli_fetch_array($q1))
	{
	echo $id=$r1['bid'];
	$q3=mysqli_query($conn,"select * from product where id=$id");
	$r3=mysqli_fetch_array($q3);

	?>
      <tr>
        <td align="left"><img src="upload/<?php echo $r3['image']; ?>" width="80" height="80" /></td>
        <td align="left"><?php echo $r3['mname']; ?></td>
        <td align="left"><?php echo $r3['price']; ?></td>
        <td align="left"><input type="text" name="qty[]" required/>
            <input type="hidden" name="gid[]" value="<?php echo $r1['id']; ?>" />
            <input type="hidden" name="bid[]" value="<?php echo $r1['bid']; ?>" />
            <input type="hidden" name="price[]" value="<?php echo $r3['price']; ?>" />
        </td>
		<td align="left"><a href="removecart.php?did=<?php echo $r1['id'];?>">Remove</a></td>
      </tr>
      <?php
	}
	?>
	<p align="center">
 <tr>
 <td colspan="6" align="center"><input type="submit" name="btn" value="Order" /></td>
 </tr>
  </p> <?php
  }
  else
  {
  echo "Order is Empty!";
  }
  ?>
  </form>
  </table>

	 <br>
	  <br>
	  
	  
	  
	  <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>Healing Center, 176 W Streetname,New York, NY 10014, US</span>
                                <p>(+71) 8522369417
                                    <br>demo@gmail.com</p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="#">Home</a></li>
                                    <li> <a href="#">About</a></li>
                                    
                                    <li> <a href="#">Brand </a></li>
                                    <li> <a href="#">Specials  </a></li>
                                    <li> <a href="#"> Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. Design By<a href="https://html.design/"> Free Html Templates</a></p>
                </div>
            </div>
        </div>
    </footer>
	  
	  
	  
	  
	  
 
 <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
	</body>
	</html>