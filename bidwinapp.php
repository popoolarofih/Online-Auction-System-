<?php
$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

function sanitize($string){
   global $conn;
   return mysqli_real_escape_string($conn, $string);
}

if(isset($_GET['id'])){
   $id = sanitize($_GET['id']);

   $sql = "select * from appliance where id = '$id'";
   $res = mysqli_query($conn, $sql);
   if(mysqli_num_rows($res)){
      while($row = mysqli_fetch_array($res)){
         $name = $row['Name'];
         $desc = $row['NameProduct'];
         $until = $row['Enddate'];
         $phone = $row['Phone'];
         $email = $row['Email'];
         $start = $row['Startdate'];
         $highest = getHighest($id);
      }
   }
}

if (isset($_POST['go'])) {
   $name = sanitize($_POST['bid']);
   $insert = "insert into bid(Bid_id, Bid) values('$id', '$name')";
  if (mysqli_query($conn, $insert)) {
    echo "<script>alert('Upload successful');
    window.location.href='';
    </script>";
  } else {
    echo "<script>alert('error')</script>";
    echo mysqli_error($conn);
    exit();
  }
}

function getHighest($id){
   global $conn;

   $sql = "select Bid from bid where Bid_id = '$id' order by Bid desc limit 1";
   $res = mysqli_query($conn, $sql);
   if(mysqli_num_rows($res) > 0){
      while($row = mysqli_fetch_array($res)){
         $bid = $row['Bid'];

         return $bid;
      }
   } else {
      return "null";
   }
}

function getLowest($id){
   global $conn;

   $sql = "select Bid from bid where Bid_id = '$id' order by Bid desc limit 1";
   $res = mysqli_query($conn, $sql);
   if(mysqli_num_rows($res) > 0){
      while($row = mysqli_fetch_array($res)){
         $bid = $row['Bid'];

         return $bid;
      }
   } else {
      return "null";
   }
}



$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));
$sql = "select * from signup order by id desc limit 1";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_array($res)){
        $namee = $row['Name'];
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
      <title>Won Bid- Appliances</title>
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
   <style>
   .brand_color{
   width: 50rem;
   margin-left:15rem;

   /* display: none; */
   }
.brand_color .contact .container input{
   width: 30rem;
}
   </style>
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
                              <li> <a href="./sign-in/adminup.php">Dashboard</a> </li>
                              <li> <a href="contactt.php">Contact</a> </li>
                               
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
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
       <div class="black" >
            <div class="brand_color" >
               <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="titlepage">
                                 <h2>Bid Won</h2>
                           </div>
                        </div>
                     </div>
                     <h3>Dear : <?php echo $namee; ?>,</h3>
                     <h3>You won a bid of #<?php echo $highest;?> with the Starting Amount of #<?php echo $start; ?> ,with the Highest Bid of #<?php echo $highest; ?> Of a product <?php echo $desc; ?></h3>
                     <h3>Please Contact</h3> <a href="https://wa.me/+234<?php echo $phone;?>"> <?php echo $phone;?></a><h3> <h3> or</h3> <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a> <h3></h3> to complete your transaction. Thank You.</h3>
      
   </div>
</div>
         </div>
               
       </div>
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