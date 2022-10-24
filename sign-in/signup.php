<?php 
$conn = mysqli_connect("localhost", "root", "", "auction") or die("Error : " . mysqli_error($conn));

function sanitize($string){
   global $conn;
   return mysqli_real_escape_string($conn, $string);
}

if (isset($_POST['go'])) {
  $name = sanitize($_POST['name']);
  $email = sanitize($_POST['email']);
  $number = sanitize($_POST['tel']);
  $describ = sanitize($_POST['password']);
  $insert = "insert into signup(Name, Email, Phone, Password) values('$name', '$email', '$number', '$describ')";
  if (mysqli_query($conn, $insert)) {
    echo "<script>alert('Upload successful')</script>";
  } else {
    echo "<script>alert('error')</script>";
    die("Error : " . mysqli_error($conn));
    echo mysqli_error($conn);
    exit();
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sign-Up</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
 
    <img class="mb-4" src="../images/AUCTION.png" alt="" width="102" >
    <h1 class="h3 mb-3 fw-normal">Welcome To Polla's Auction</h1>
    <h1 class="h3 mb-3 fw-normal">Please sign Up</h1>
    <div class="form-floating">
    <form action="./signup.php" method="POST">
      <input type="text" autocomplete="off" class="form-control" id="floatingInput" name="name" placeholder="Full Name" required/>
      <!-- <label for="floatingInput">Full Name</label> -->
    </div>
    <div class="form-floating">
      <input type="tel" autocomplete="off" class="form-control" id="floatingInput" name="tel" placeholder="0901234568" required/>
      <label for="floatingInput">Phone Number</label>
    </div>
    <div class="form-floating">
      <input type="email" autocomplete="off" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required/>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" autocomplete="off" class="form-control" id="floatingPassword" name="password" placeholder="Password" required/>
      <label for="floatingPassword">Password</label>
    </div>
    <a href="./signin.php"><button class="w-100 btn btn-lg btn-primary" name="go" type="submit">Sign-Up</button></a>
    <span>already have an account?</span><a href="signin.php">Sign-In</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
  </form>
</main>


    
  </body>
</html>
