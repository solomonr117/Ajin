<?php 
include("dbconnect.php");
$id=$_GET['id'];
$qry=mysqli_query($conn,"select * from product where id=$id");
$row=mysqli_fetch_array($qry);




 	
extract($_POST);
	
if(isset($_POST['btn']))
{

			  $file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   


				
					
	 if($file_name==""){		
 $img=$row['image'];
 }else{
 $img=$file_name;
 }
 $path=move_uploaded_file($file_loc,$folder.$img);
			
					$qry=mysqli_query($conn,"update  product  set brname='$name',mname='$au',weight='$edi',ram='$sub',storage='$price',price='$qty',image='$img' where id=$id");
				if($qry)
							{
	
							echo "<script>alert('Mobile updated sucessfully')</script>";
	
							}
				
					
					
		
			


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
                                         <li class="active"><a href="ehome.php">Home</a> </li>
                   <li class="active"><a href="eedit.php">View</a> </li>
                                    
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




<?php

$id=$_GET['id'];
$qry=mysqli_query($conn,"select * from product where id=$id");
$row=mysqli_fetch_array($qry);

 ?>
<div style="border:1px solid black;">
 <form id="f1" name="f1" method="post" action="#"  enctype="multipart/form-data">
  <table width="38%" height="372" border="0" align="center">	
	

    <tr>
    
     <td colspan="2"  align="center" ><div class="style5"><h3 style="text-decoration:underline">Update Mobile Details</h></div></td>
      
    </tr>
	
    <tr>
    
      <td width="43%" height="48">Brand Name</span></td>
      <td width="57%"><label>
        <input name="name" type="text" id="name" required value="<?php echo $row['brname'] ?>"/>
      </label></td>
     
    </tr>
	
	
	
	
	
	
	
     <tr>
     
      <td height="46">Mobile</span></td>
      <td><label>
        <input name="au" type="text" id="au" required value="<?php echo $row['mname'] ?>"/>
      </label></td>
     
    </tr>
	
    <tr>
      
      <td height="47">Screen</td>
      <td><input name="edi" type="text" id="edi" required value="<?php echo $row['weight'] ?>"/></td>
     
    </tr>
	
	
	  <tr>
      
      <td height="45">RAM</td>
      <td><input name="sub" type="text" id="sub" required value="<?php echo $row['ram'] ?>"/></td>
     
    </tr>
	
	
	
	 <tr>
      
      <td height="49">Storage</td>
      <td><input name="price" type="text" id="price" required value="<?php echo $row['storage'] ?>"/></td>
     
    </tr>
	
	
	 <tr>
      
      <td height="47">Price</td>
      <td><input name="qty" type="text" id="qty" required value="<?php echo $row['price'] ?>"/></td>
     
    </tr>
	
	
	
	
	 <tr>
      
      <td height="47">Mobile Image</td>
      <td> <img  src="upload/<?php echo $row['image'] ?>" height="100px" width="100px"/></br>
	  <input name="img" type="file" id="file"  value="<?php echo $row['image'] ?>"/></td>
     
    </tr>
	
	
	<tr>
     
     <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
    
    </tr>
  </table>
</form>
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