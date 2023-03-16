



<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
				
					
		
			



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
                                       <li class="active"><a href="adminhome.php">Home</a> </li>
               
                                        <li><a href="viewo.php">View Order</a></li>
                                        <li><a href="views.php">View Sales</a></li>
										 <li><a href="vfeedback.php">View Feedback</a></li>
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




























<table width="90%" align="center" border="1">
	
	
	<tr>
		<td colspan="10" align="center"><strong><h3>Sales Details</h3></strong></td>
	  </tr>
	
	
	
	
		    <tr>


		  <td width="10%"><div align="center" class="style6"><strong>Product Image</strong> </div></td>
		   <td width="12%"><div align="center" class="style6"><strong>Product Name</strong> </div></td>
		   <td width="12%"><div align="center" class="style6"><strong>Price</strong> </div></td>
		    <td width="13%"><div align="center" class="style6"><strong>Quantity</strong> </div></td>
			<td width="17%"><div align="center" class="style6"><strong>Amount</strong> </div></td>
			<td width="17%"><div align="center" class="style6"><strong>User Name</strong> </div></td>
			<td width="17%"><div align="center" class="style6"><strong>Contact No</strong> </div></td>
			 </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from addcart where  status='2'");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		$pid=$row['bid'];
		$reg=$row['reg'];
		$qry1=mysqli_query($conn,"select * from product where id=$pid");
		$row1=mysqli_fetch_assoc($qry1);
		
		$qry2=mysqli_query($conn,"select * from register where uname='$reg'");
		$row2=mysqli_fetch_assoc($qry2);
		
		
		?>
        <tr>


			  <td><div align="center"><img src="upload\<?php echo $row1['image'];?>"  width="100" height="100"/></div></td>
		   <td><div align="center"><?php echo $row1['mname'];?></div></td>
			  <td><div align="center"><?php echo $row['price'];?></div></td>
			 <td><div align="center"><?php echo $row['quantity'];?></div></td>
			   <td><div align="center"><?php echo $row['amount'];?></div></td>
			    <td><div align="center"><?php echo $row2['name'];?></div></td>
			   <td><div align="center"><?php echo $row2['phone'];?></div></td>
			  		 
        </tr>

		 <tr>
		  	 	<td colspan="9">&nbsp;</td>
		   		
		
		
		</tr>
		
        <?php
		$i++;
	}
		?>

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
                    <p>? 2019 All Rights Reserved. Design By<a href="https://html.design/"> Free Html Templates</a></p>
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