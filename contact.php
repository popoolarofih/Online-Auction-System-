<?php 
$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

function sanitize($string){
   global $conn;
   return mysqli_real_escape_string($conn, $string);
}

if (isset($_POST['go'])) {
  $name = sanitize($_POST['name']);
  $email = sanitize($_POST['email']);
  $number = sanitize($_POST['phone']);
  $describ = sanitize($_POST['product']);
  $equip = sanitize($_POST['initial']);
  $start = sanitize($_POST['start']);
  $adress = sanitize($_POST['nameproduct']);
  $img = sanitize($_FILES['front']['name']);
  $rear = sanitize($_FILES['rear']['name']);
  $right = sanitize($_FILES['right']['name']);
  $left = sanitize($_FILES['left']['name']);
  $edate = sanitize($_POST['date']);
  $sdate = sanitize($_POST['end']);

  $dir = "img/";
  move_uploaded_file($_FILES['rear']['tmp_name'], $dir . $rear);
  move_uploaded_file($_FILES['right']['tmp_name'], $dir . $right);
  move_uploaded_file($_FILES['left']['tmp_name'], $dir . $left);
  move_uploaded_file($_FILES['front']['tmp_name'], $dir . $img);
  $insert = "insert into car(Name, Email, Phone, Product, Initial, Start, NameProduct, Frontv, Rearv, Rightv, Leftv, Enddate, Startdate) values('$name', '$email', '$number', '$describ', '$equip', '$start', '$adress','$img', '$rear', '$right', '$left', '$edate', '$sdate')";
  if (mysqli_query($conn, $insert)) {
    echo "<script>alert('Upload successful')</script>";
  } else {
    echo "<script>alert('error')</script>";
    echo mysqli_error($conn);
    exit();
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
      <title>Upload product- Cars</title>
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
           <!-- header -->
           <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p>Welcome to Polla's Auction System </p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.php"><img src="./images/AUCTION.png" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li > <a href="index.php">Home</a> </li>
                              <li> <a href="contactt.php">Contact</a> </li> 
                              <<li> <a href="./sign-in/adminup.php">Dashboard</a> </li>
                              <!-- <li class="active"> <a href="contact.php">Contact</a> </li> -->
                              
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <!-- <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  <li><a class="buy" href="#">Login</a></li>
               </div> -->
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Upload Cars For Bidding</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                <form class="main_form" method="POST" action="contact.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            
                                <input class="form-control" placeholder="Your name" type="text" name="name" required/>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="email" name="email" required/>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Phone" type="tel" name="phone" required/>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Name Of Product" type="text" name="nameproduct" required/>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Starting Price" type="number" name="start" required/>
                               
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Initial Price" type="number" name="initial" required/>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Starting Date" type="datetime-local" name="date" required/>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Ending Date"  type="datetime-local" name="end" required/>
                            </div>
                            
                            <div class="col-md-12">
                                <textarea class="textarea" name="product" placeholder="Product Description" required></textarea>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <h2>Upload Front View Of Product</h2>
                               <input class="form-control" type="file" name="front" id="" required/>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <h2>Upload Rear View Of Product</h2>
                               <input class="form-control" type="file" name="rear" id="" required/>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <h2>Upload Right View Of Product</h2>
                               <input class="form-control" type="file" name="right" id="" required/>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <h2>Upload Left View Of Product</h2>
                               <input class="form-control" type="file" name="left" id="" required/>
                            </div>
                            <div class=" col-md-12">
                                <button name="go" class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
      <!--  footer --> 
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>conatct us</h3>
                     <span>Federal College Of Animal Health & Production Technology<br>
                        09017652551</span>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class="lik">
                         <li> <a href="#">About us</a></li>
                         <li> <a href="#">Terms and conditions</a></li>
                         <li> <a href="#">Privacy policy</a></li>
                         <li> <a href="#">News</a></li>
                          <li> <a href="#">Contact us</a></li>
                     </ul>
                  </div>
               </div>
                 <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>service</h3>
                      <ul class="lik">
                    <li> <a href="#"> Data recovery</a></li>
                         <li> <a href="#">Computer repair</a></li>
                         <li> <a href="#">Mobile service</a></li>
                         <li> <a href="#">Network solutions</a></li>
                          <li> <a href="#">Technical support</a></li>
                  </div>
               </div> -->
                 <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>About lighten</h3>
                     <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
                  </div>
               </div> -->
            </div>
         </div>
            <div class="copyright">
               <p>Copyright 2022 All Right Reserved By <a href="#">EXECUTIVE DESIGNS</a></p>
            </div>
         
      </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>