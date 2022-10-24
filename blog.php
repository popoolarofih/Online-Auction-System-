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
      <title>Auction</title>
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
                        <div class="logo"> <a href="index.html"><img src="./images/AUCTION.png" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li > <a href="index.php">Home</a> </li>
                              <!-- <li> <a href="product.php">product</a> </li> -->
                              <li class="active"><a href="blog.php">Dashboard</a> </li>
                              <li> <a href="contactt.php">Contact</a> </li> 
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
      <div  class="table">
        <div class="mossturah">
          <h3>Electronics</h3>
          </div>
            <div >
            <?php
	$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

  if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $del = mysqli_query($conn, "delete from land where Id = '$del_id'");
    if($del){
      echo '<script>
      alert("Deleted successfully!");
      window.location.href="blog.php";
      </script>';
    } else {
      echo '<script>
      alert("Error encountered....try again next year!");
      window.location.href="blog.php";
      </script>';
    }
  }

    $select = "select * from land";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		echo "<table>
		<tr>
		<th>Name of Product Owner</th>
		<th>Name Of Product</th>
		<th>Description</th>
		<th>Initial Price</th>
		<th>Start Price</th>
		<th>Phone Number</th>
		<th>Email</th>
		<th>Starting Date</th>
		<th>Ending Date</th>
		</tr>
		";
		while($row = mysqli_fetch_array($result)){
      $id = $row['Id'];
			$img = $row['Start'];
			$full = $row['Name'];
			$email = $row['Email'];
			$mail = $row['Initial'];
			$ename = $row['NameProduct'];
			$adress = $row['Phone'];
			$tion = $row['Enddate'];
			$pnumber = $row['Startdate'];
			$product = $row['Product'];
      $func = "return confirm('Do you really want to delete this product?')";
			echo '
			<tr>
			<td>'.$full.'</td>
			<td>'.$ename.'</td>
			<td>'.$product.'</td>
			<td>'.$mail.'</td>
			<td>'.$img.'</td>
			<td>'.$adress.'</td>
			<td>'.$email.'</td>
			<td>'.$pnumber.'</td>
			<td>'.$tion.'</td>
      <td><a class="btn btn-secondary text-white py-3 px-4" onclick="'.$func.'" href="?id='.$id.'">Delete</a></td>
			</tr>
			';
		}
		echo "</table>";
	}
	else{
		echo "<h1>Nothing Here</h1>";
	}


          
?>
        </div>
   
    </div>
      <div class="table" >
      <div class="mossturah">
          <h3>House</h3>
          </div>
            <div >
            <?php
	$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

  if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $del = mysqli_query($conn, "delete from home where Id = '$del_id'");
    if($del){
      echo '<script>
      alert("Deleted successfully!");
      window.location.href="blog.php";
      </script>';
    } else {
      echo '<script>
      alert("Error encountered....try again next year!");
      window.location.href="blog.php";
      </script>';
    }
  }

    $select = "select * from home ";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		echo "<table>
		<tr>
		<th>Name of Product Owner</th>
		<th>Name Of Product</th>
		<th>Description</th>
		<th>Initial Price</th>
		<th>Start Price</th>
		<th>Phone Number</th>
		<th>Email</th>
		<th>Starting Date</th>
		<th>Ending Date</th>
		</tr>
		";
		while($row = mysqli_fetch_array($result)){
      $id = $row['Id'];
			$img = $row['Start'];
			$full = $row['Name'];
			$email = $row['Email'];
			$mail = $row['Initial'];
			$ename = $row['NameProduct'];
			$adress = $row['Phone'];
			$tion = $row['Enddate'];
			$pnumber = $row['Startdate'];
			$product = $row['Product'];
      $func = "return confirm('Do you really want to delete this product?')";
			echo '
			<tr>
			<td>'.$full.'</td>
			<td>'.$ename.'</td>
			<td>'.$product.'</td>
			<td>'.$mail.'</td>
			<td>'.$img.'</td>
			<td>'.$adress.'</td>
			<td>'.$email.'</td>
			<td>'.$pnumber.'</td>
			<td>'.$tion.'</td>
      <td><a class="btn btn-secondary text-white py-3 px-4" onclick="'.$func.'" href="?id='.$id.'">Delete</a></td>
			</tr>
			';
		}
		echo "</table>";
	}
	else{
		echo "<h1>Nothing Here</h1>";
	}


          
?>
        </div>
    
    </div>

      <div class="table">
      <div class="mossturah">
          <h3>Artifact</h3>
          </div>
            <div >
            <?php
	$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

  if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $del = mysqli_query($conn, "delete from artifact where Id = '$del_id'");
    if($del){
      echo '<script>
      alert("Deleted successfully!");
      window.location.href="blog.php";
      </script>';
    } else {
      echo '<script>
      alert("Error encountered....try again next year!");
      window.location.href="blog.php";
      </script>';
    }
  }

    $select = "select * from artifact";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		echo "<table>
		<tr>
		<th>Name of Product Owner</th>
		<th>Name Of Product</th>
		<th>Description</th>
		<th>Initial Price</th>
		<th>Start Price</th>
		<th>Phone Number</th>
		<th>Email</th>
		<th>Starting Date</th>
		<th>Ending Date</th>
		</tr>
		";
		while($row = mysqli_fetch_array($result)){
      $id = $row['Id'];
			$img = $row['Start'];
			$full = $row['Name'];
			$email = $row['Email'];
			$mail = $row['Initial'];
			$ename = $row['NameProduct'];
			$adress = $row['Phone'];
			$tion = $row['Enddate'];
			$pnumber = $row['Startdate'];
			$product = $row['Product'];
      $func = "return confirm('Do you really want to delete this product?')";
			echo '
			<tr>
			<td>'.$full.'</td>
			<td>'.$ename.'</td>
			<td>'.$product.'</td>
			<td>'.$mail.'</td>
			<td>'.$img.'</td>
			<td>'.$adress.'</td>
			<td>'.$email.'</td>
			<td>'.$pnumber.'</td>
			<td>'.$tion.'</td>
      <td><a class="btn btn-secondary text-white py-3 px-4" onclick="'.$func.'" href="?id='.$id.'">Delete</a></td>
			</tr>
			';
		}
		echo "</table>";
	}
	else{
		echo "<h1>Nothing Here</h1>";
	}


          
?>
        </div>
   
    </div>

      <div class="table">
      <div class="mossturah">
          <h3>Home Appliances</h3>
          </div>
            <div >
            <?php
	$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

  if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $del = mysqli_query($conn, "delete from appliance where Id = '$del_id'");
    if($del){
      echo '<script>
      alert("Deleted successfully!");
      window.location.href="blog.php";
      </script>';
    } else {
      echo '<script>
      alert("Error encountered....try again next year!");
      window.location.href="blog.php";
      </script>';
    }
  }

    $select = "select * from appliance";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		echo "<table>
		<tr>
		<th>Name of Product Owner</th>
		<th>Name Of Product</th>
		<th>Description</th>
		<th>Initial Price</th>
		<th>Start Price</th>
		<th>Phone Number</th>
		<th>Email</th>
		<th>Starting Date</th>
		<th>Ending Date</th>
		</tr>
		";
		while($row = mysqli_fetch_array($result)){
      $id = $row['Id'];
			$img = $row['Start'];
			$full = $row['Name'];
			$email = $row['Email'];
			$mail = $row['Initial'];
			$ename = $row['NameProduct'];
			$adress = $row['Phone'];
			$tion = $row['Enddate'];
			$pnumber = $row['Startdate'];
			$product = $row['Product'];
      $func = "return confirm('Do you really want to delete this product?')";
			echo '
			<tr>
			<td>'.$full.'</td>
			<td>'.$ename.'</td>
			<td>'.$product.'</td>
			<td>'.$mail.'</td>
			<td>'.$img.'</td>
			<td>'.$adress.'</td>
			<td>'.$email.'</td>
			<td>'.$pnumber.'</td>
			<td>'.$tion.'</td>
      <td><a class="btn btn-secondary text-white py-3 px-4" onclick="'.$func.'" href="?id='.$id.'">Delete</a></td>
			</tr>
			';
		}
		echo "</table>";
	}
	else{
		echo "<h1>Nothing Here</h1>";
	}


          
?>
        </div>
    </div>
    </div>

       <div class="table">
       <div class="mossturah">
          <h3>Car</h3>
          </div>
            <div >
            <?php
	$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

  if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $del = mysqli_query($conn, "delete from car where Id = '$del_id'");
    if($del){
      echo '<script>
      alert("Deleted successfully!");
      window.location.href="blog.php";
      </script>';
    } else {
      echo '<script>
      alert("Error encountered....try again next year!");
      window.location.href="blog.php";
      </script>';
    }
  }

    $select = "select * from car";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		echo "<table>
		<tr>
		<th>Name of Product Owner</th>
		<th>Name Of Product</th>
		<th>Description</th>
		<th>Initial Price</th>
		<th>Start Price</th>
		<th>Phone Number</th>
		<th>Email</th>
		<th>Starting Date</th>
		<th>Ending Date</th>
		</tr>
		";
		while($row = mysqli_fetch_array($result)){
      $id = $row['Id'];
			$img = $row['Start'];
			$full = $row['Name'];
			$email = $row['Email'];
			$mail = $row['Initial'];
			$ename = $row['NameProduct'];
			$adress = $row['Phone'];
			$tion = $row['Enddate'];
			$pnumber = $row['Startdate'];
			$product = $row['Product'];
      $func = "return confirm('Do you really want to delete this product?')";
			echo '
			<tr>
			<td>'.$full.'</td>
			<td>'.$ename.'</td>
			<td>'.$product.'</td>
			<td>'.$mail.'</td>
			<td>'.$img.'</td>
			<td>'.$adress.'</td>
			<td>'.$email.'</td>
			<td>'.$pnumber.'</td>
			<td>'.$tion.'</td>
      <td><a class="btn btn-secondary text-white py-3 px-4" onclick="'.$func.'" href="?id='.$id.'">Delete</a></td>
			</tr>
			';
		}
		echo "</table>";
	}
	else{
		echo "<h1>Nothing Here</h1>";
	}


          
?>
        </div>
    </div>
    </div>
<div class="">
  <h3>User's Comlaints</h3>
  <div class="table">
       <div class="mossturah">
          <h3>Bid Car</h3>
          </div>
            <div >
            <?php
	$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

  if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $del = mysqli_query($conn, "delete from bidcar where Id = '$del_id'");
    if($del){
      echo '<script>
      alert("Deleted successfully!");
      window.location.href="blog.php";
      </script>';
    } else {
      echo '<script>
      alert("Error encountered....try again next year!");
      window.location.href="blog.php";
      </script>';
    }
  }

    $select = "select * from bidcar";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		echo "<table>
		<tr>
		<th> Id</th>
		<th>Bid ID</th>
		<th>Bid</th>
	
		</tr>
		";
		while($row = mysqli_fetch_array($result)){
      $id = $row['Id'];
			$img = $row['Bid_id'];
			$full = $row['Bid'];
		
      $func = "return confirm('Do you really want to delete this product?')";
			echo '
			<tr>
			<td>'.$id.'</td>
			<td>'.$img.'</td>
			<td>'.$full.'</td>
			
      <td><a class="btn btn-secondary text-white py-3 px-4" onclick="'.$func.'" href="?id='.$id.'">Delete</a></td>
			</tr>
			';
		}
		echo "</table>";
	}
	else{
		echo "<h1>Nothing Here</h1>";
	}


          
?>
        </div>
    </div>
    </div>

    <div class="table">
       <div class="mossturah">
          <h3>Bid Of Home Appliances</h3>
          </div>
            <div >
            <?php
	$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

  if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $del = mysqli_query($conn, "delete from bid where Id = '$del_id'");
    if($del){
      echo '<script>
      alert("Deleted successfully!");
      window.location.href="blog.php";
      </script>';
    } else {
      echo '<script>
      alert("Error encountered....try again next year!");
      window.location.href="blog.php";
      </script>';
    }
  }

    $select = "select * from bid";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		echo "<table>
		<tr>
		<th> Id</th>
		<th>Bid ID</th>
		<th>Bid</th>
	
		</tr>
		";
		while($row = mysqli_fetch_array($result)){
      $id = $row['Id'];
			$img = $row['Bid_id'];
			$full = $row['Bid'];
		
      $func = "return confirm('Do you really want to delete this product?')";
			echo '
			<tr>
			<td>'.$id.'</td>
			<td>'.$img.'</td>
			<td>'.$full.'</td>
			
      <td><a class="btn btn-secondary text-white py-3 px-4" onclick="'.$func.'" href="?id='.$id.'">Delete</a></td>
			</tr>
			';
		}
		echo "</table>";
	}
	else{
		echo "<h1>Nothing Here</h1>";
	}


          
?>
        </div>
    </div>
    </div>

    <div class="table">
       <div class="mossturah">
          <h3>Bids Of Electronics</h3>
          </div>
            <div >
            <?php
	$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

  if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $del = mysqli_query($conn, "delete from bidelect where Id = '$del_id'");
    if($del){
      echo '<script>
      alert("Deleted successfully!");
      window.location.href="blog.php";
      </script>';
    } else {
      echo '<script>
      alert("Error encountered....try again next year!");
      window.location.href="blog.php";
      </script>';
    }
  }

    $select = "select * from bidelect";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		echo "<table>
		<tr>
		<th> Id</th>
		<th>Bid ID</th>
		<th>Bid</th>
	
		</tr>
		";
		while($row = mysqli_fetch_array($result)){
      $id = $row['Id'];
			$img = $row['Bid_id'];
			$full = $row['Bid'];
		
      $func = "return confirm('Do you really want to delete this product?')";
			echo '
			<tr>
			<td>'.$id.'</td>
			<td>'.$img.'</td>
			<td>'.$full.'</td>
			
      <td><a class="btn btn-secondary text-white py-3 px-4" onclick="'.$func.'" href="?id='.$id.'">Delete</a></td>
			</tr>
			';
		}
		echo "</table>";
	}
	else{
		echo "<h1>Nothing Here</h1>";
	}


          
?>
        </div>
    </div>
    </div>

    <div class="table">
       <div class="mossturah">
          <h3>Bid Of Jewelry</h3>
          </div>
            <div >
            <?php
	$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

  if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $del = mysqli_query($conn, "delete from bidhouse where Id = '$del_id'");
    if($del){
      echo '<script>
      alert("Deleted successfully!");
      window.location.href="blog.php";
      </script>';
    } else {
      echo '<script>
      alert("Error encountered....try again next year!");
      window.location.href="blog.php";
      </script>';
    }
  }

    $select = "select * from bidhouse";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		echo "<table>
		<tr>
		<th> Id</th>
		<th>Bid ID</th>
		<th>Bid</th>
	
		</tr>
		";
		while($row = mysqli_fetch_array($result)){
      $id = $row['Id'];
			$img = $row['Bid_id'];
			$full = $row['Bid'];
		
      $func = "return confirm('Do you really want to delete this product?')";
			echo '
			<tr>
			<td>'.$id.'</td>
			<td>'.$img.'</td>
			<td>'.$full.'</td>
			
      <td><a class="btn btn-secondary text-white py-3 px-4" onclick="'.$func.'" href="?id='.$id.'">Delete</a></td>
			</tr>
			';
		}
		echo "</table>";
	}
	else{
		echo "<h1>Nothing Here</h1>";
	}


          
?>
        </div>
    </div>
    </div>

    <div class="table">
       <div class="mossturah">
          <h3>Bids Of Artifacts</h3>
          </div>
            <div >
            <?php
	$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

  if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $del = mysqli_query($conn, "delete from bidart where Id = '$del_id'");
    if($del){
      echo '<script>
      alert("Deleted successfully!");
      window.location.href="blog.php";
      </script>';
    } else {
      echo '<script>
      alert("Error encountered....try again next year!");
      window.location.href="blog.php";
      </script>';
    }
  }

    $select = "select * from bidart";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		echo "<table>
		<tr>
		<th> Id</th>
		<th>Bid ID</th>
		<th>Bid</th>
	
		</tr>
		";
		while($row = mysqli_fetch_array($result)){
      $id = $row['Id'];
			$img = $row['Bid_id'];
			$full = $row['Bid'];
		
      $func = "return confirm('Do you really want to delete this product?')";
			echo '
			<tr>
			<td>'.$id.'</td>
			<td>'.$img.'</td>
			<td>'.$full.'</td>
			
      <td><a class="btn btn-secondary text-white py-3 px-4" onclick="'.$func.'" href="?id='.$id.'">Delete</a></td>
			</tr>
			';
		}
		echo "</table>";
	}
	else{
		echo "<h1>Nothing Here</h1>";
	}


          
?>
        </div>
    </div>
    </div>
</div>



    <!-- end Lastestnews -->
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