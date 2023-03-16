<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{


$qry1=mysqli_query($conn,"select * from register where uname='$uname'");
$count=mysqli_num_rows($qry1);
if($count>0){                                                                                           
echo "<script>alert('username already taken')</script>";
}else{		
$qry=mysqli_query($conn,"insert into register values('','$name','$gender','$dob','$email','$phone','$address','$uname','$password')");
	if($qry)
	{
	
	echo "<script>alert('Registered sucessfully')</script>";
	
	}
	

	
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
                                        <li class="active"> <a href="index.php">Home</a> </li>
                                        <li> <a href="admin.php">Login</a> </li>
                                        <li><a href="user.php">User Login</a></li>
                                        <li><a href="register.php">New User</a></li>
                                        <li><a href="#">Contact Us</a></li>
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




 <form id="f1" name="f1" method="post" action="#" >
  <table width="36%" height="541" border="0" align="center">	
	

    <tr>
    
     <td height="40" colspan="2"  align="center" ><div class="style5"><h3>New User Registration</h></div></td>
      
    </tr>
	
    <tr>
    
      <td width="44%" height="46"><span class="style6">User Name</span></td>
      <td width="56%"><label>
        <input name="name" type="text" id="name" required/>
      </label></td>
     
    </tr>
	
    <tr>
     
      <td height="40"><span class="style6">Gender</span></td>
      <td><input name="gender" type="radio" value="male"required />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      
    </tr>
	
    <tr>
     
      <td height="39"><span class="style6">Date Of Birth</span></td>
      <td><label>
        <input name="dob" type="date" id="dob" required />
      </label></td>
     
    </tr>
	
    <tr>
      
      <td height="44">Email Id</td>
      <td><input name="email" type="text" id="email" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" title="enter a valid email id"/></td>
     
    </tr>
	
	
	  <tr>
      
      <td height="42">Phone Number </td>
      <td><input name="phone" type="text" id="phone" required  pattern="[6789][0-9]{9}"  title="firstnumber should be start with 6 or 7 or 8 or 9 range 10"/></td>
     
    </tr>
		 <tr>
    
      <td height="55">User Address</td>
      <td><textarea name="address" required ></textarea></td>
     
    </tr>

	  <tr>
      
      <td height="41">User Name </td>
      <td><input name="uname" type="text" id="username" required pattern="[A-z 0-9]{3,8}" title="Minimun 3 character max 9"/></td>
     
    </tr>
	
	<tr>
     
      <td height="43">Password</td>
      <td><input type="password" name="password" id="password" required pattern="[A-z 0-9@*]{3,8}" title="Minimun 3 character max 9"></td>
     
    </tr>
	

	


	<tr>
     
     <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
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