<?php
$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

function sanitize($string){
   global $conn;
   return mysqli_real_escape_string($conn, $string);
}

if(isset($_GET['id'])){
   $id = sanitize($_GET['id']);

   $sql = "select * from home where id = '$id'";
   $res = mysqli_query($conn, $sql);
   if(mysqli_num_rows($res)){
      while($row = mysqli_fetch_array($res)){
         $name = $row['Name'];
         $desc = $row['Product'];
         $until = $row['Enddate'];
         $start = $row['Startdate'];
         $initial = $row['Initial'];
         $highest = getHighest($id);
      }
   }
}

if (isset($_POST['go'])) {
   $name = sanitize($_POST['bid']);
   $insert = "insert into bidhouse(Bid_id, Bid) values('$id', '$name')";
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

   $sql = "select Bid from bidhouse where Bid_id = '$id' order by Bid desc limit 1";
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

   $sql = "select Bid from bidhouse where Bid_id = '$id' order by Bid desc limit 1";
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
      <title>Bid product- Jewelry</title>
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
                                 <h2>Place Your Bid</h2>
                                 <div class=" col-md-12">
                                 <button class="send"><a href="./bidwinhouse.php?id=<?php echo $id; ?>">Winner</a></button>
                                 </div> 
                                 
                           </div>
                        </div>
                     </div>
                     <h3>Name: <?php echo $name; ?></h3>
                     <h3>Category:<span>Jewelry</span></h3>
                     <h3>Start: <?php echo $start; ?></h3>
                     <h3>Until: <?php echo $until; ?></h3>
                     <h3>Starting Amount: #<?php echo $initial; ?></h3>
                     <h3>Highest Bid:#<?php echo $highest; ?></h3>
                     <?php
$conn = mysqli_connect("localhost", "root", "", "auction") or die ("Error : " . mysqli_error($conn));
$select = "select * from bidhouse";
$result = mysqli_query($conn, $select);
            $tttt = mysqli_num_rows($result);
echo "<h3>Number Of Bids:".$tttt."</h2>";
?>
                     <h3>Description: <?php echo $desc; ?></h3>
       <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php
                   $tody = date("c");
                   $until = strtotime($until);
                   $today = strtotime($tody);
                   if($tody < $until){
                  ?>
                <form class="main_form" method="POST" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                               <input  class="form-control" type="number" name="bid" placeholder="00.00">
                            </div>
                            <div class=" col-md-12">
                                <button name="go" class="send">Bid</button>
                            </div>
                        </div>
                    </form>
                    <?php } else { ?>
                  Closed!
                  <?php } ?>
                </div>
            </div>
        </div>
    </div>
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