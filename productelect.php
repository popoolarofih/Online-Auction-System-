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
      <title>lighten</title>
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
      /** product section **/
.product{
   display: flex;
	background: #fff;
	padding-top:50px 60px;
}

.product .title {
	text-align:left;
	padding-bottom: 60px;
}

.product .title h2 {
	font-size: 50px;
	line-height: 55px;
	color:#ffc221;
	font-weight: 500;
	text-transform: uppercase;
    margin-bottom: 27px;
    position: relative;
    padding-bottom: 8px;
}

.product .title h2:after {
	position: absolute;
    border-bottom: #000 solid 10px;
    content: '';
    top: 100%;
    width: 110px;
}

.product .title span{
color:#070500;
font-size: 22px;
line-height: 28px;
margin-top: 20px;
}

.product-bg {
	background: url(../images/bg.jpg);
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
.product-bg-white {
	display: flex;
	box-shadow: #00000040 0px 0px 25px 0px;
	padding-top: 80px;
	padding-bottom: 60px;
}
.product-bg .product-bg-white .product-box {
 	background: #ddd;
 	text-align:left;
 	margin-bottom: 30px;
 	padding: 20px 25px;

 }
 .product-box .this{
	 border: 2px solid #f9be20;
	 padding: 1rem;
 }

 .product-box .this:hover{
	border: 2px solid #ffffffbd;
 }
 .product-box{
	 width:30rem;
    /* display: flex; */
	 text-align: center;
    
 }
.product-box .imgg figure{
	display: flex;
   /* justify-content: center; */
   padding: 1rem;
	width: 26rem;
	margin-left: -0.2rem;

}
  .product-bg .product-bg-white .product-box i img {width: 100%;}
 .product-bg .product-bg-white .product-box:hover {
 	background: #fdc24f;
 }

.product-bg .product-bg-white .product-box  h3 {
 	color: #020000;
 	font-weight: 500;
 	font-size: 17px;
 	line-height: 20px;
 	padding-top: 15px;
 }
 .product-bg .product-bg-white .product-box  .werey {
    text-transform: lowercase;
    font-size: 0.8rem;
    font-style: italic;
 }

.product-bg .product-bg-white .product-box span {
 	color: #020000;
 	font-weight: 500;
 	font-size: 22px;
 	line-height: 22px;
 }
.product-bg .product-bg-white .product-box span:hover {
	color: #fff;
}

   </style>
   <!-- body -->
   <body class="main-layout product_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
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
                        <div class="logo"> <a href="index.html"><img src="./images/AUCTION.png" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li> <a href="index.php">Home</a> </li>
                              <!-- <li class="active"> <a href="product.php">product</a> </li> -->
                              <li> <a href="contactt.php">Contact</a> </li> 
                              <li> <a href="blog.php">Dashboard</a> </li>
                              <!-- <li> <a href="contact.php">Contact</a> </li>
                              <li class="mean-last"> <a href="#contact">signup</a> </li> -->
                               
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
                        <h2>Bidding Item - Electronics</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
      <!-- our product -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     
                     <span>Bid the different varieties of Electronics here.</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
            <div class="row">
            <?php 
$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));
$select = "select * from land";
$result = mysqli_query($conn, $select);
// echo mysqli_num_rows($result);
if(mysqli_num_rows($result)){
	while($row = mysqli_fetch_array($result)){
		$img = $row['Frontv'];
		$rear = $row['Rearv'];
		$left = $row['Leftv'];
		$right = $row['Rightv'];
		$full = $row['Name'];
		$mail = $row['Email'];
		$ename = $row['NameProduct'];
		$adress = $row['Product'];
		$tion = $row['Initial'];
		$pnumber = $row['Phone'];
		$endate = $row['Startdate'];
		$stardate = $row['Enddate'];
		$init = $row['Start'];
		?>
		
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
               <div class="product-box">
            <div class="col-md-15">
              <div class="title" >
               <span>Product</span>
             </div>   
            </div>
            <div class="imgg">
               <span>Front View</span>
               <?php echo '<figure><img  src="img/'.$img.'"></figure>'?>
               <span>Rear View</span>
					<?php echo '<figure><img  src="img/'.$rear.'"></figure>'?>
               <span>Left View</span>
					<?php echo '<figure><img  src="img/'.$left.'"></figure>'?>
               <span>Right View</span>
					<?php echo '<figure><img  src="img/'.$right.'"></figure>'?>
               </div>
					<div class="this">
                <?php echo '<span> Product Owner:<h3>'.$full.' </h3></span> '; ?>
					<?php echo '<span>Phone Number: <h3>'.$pnumber.'  </h3></span>';?>
					<?php echo '<span>Email: <h3>'.$mail.'  </h3></span>';?>
					<?php echo '<span>Name Of Product:<h3> '.$ename.' </h3></span>';?>
					<?php echo '<span>Production Description: <p >'.$adress.'</p> </span>';?>
					<?php echo '<span>Start Price:<h3># '.$init.' </h3></span>';?>
					<?php echo '<span>Initial Price:<h3># '.$tion.' </h3></span>';?>
					<?php echo '<span>Start Date: <h3>'.$endate.' </h3></span>';?>
					<?php echo '<span>End Date:<h3>'.$stardate.' </h3></span>';?>  
               </div>
					<a href="./bidelect.php?id=<?php echo $row['Id'];?>"><button onclick="add_taskk()" class="btn btn-secondary text-white py-3 px-4">Bid</button></a>
					
            </div>

<?php	}

}
?>
               <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div> -->
               <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i></i>
                     <h3></h3>
                     <span></span>
                     <button><a href="">Bid</a></button>
                  </div>
               </div> -->
              
               </div>
               </div>
            </div>
         </div>		
		</div>
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