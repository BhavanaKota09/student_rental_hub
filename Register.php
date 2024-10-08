<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
</head>
<style type="text/css">
body {
  font-family: "Lato", sans-serif;
  background-color: #e8e8e8;
  margin: 0px;
  background-image: linear-gradient( rgba(0, 0, 0, 0.8) , rgba(0, 0, 0, 0.8 ) ),url('images/login-bg.jpg');
  background-size: cover;
  
}
label{
  color:#fff;
}
.loginBlock{
  height: 100vh;
}

</style>

 <?php

  session_start();

  if(isset($_SESSION['name'])){
    header("Location: home.php");
  }

  include("includes/db.php");
  include("includes/common.php");

?>
<body>
  <div class="container">

    <div class="loginBlock w-50 mx-auto d-flex align-items-center  text-white">
        <form action="" class="w-100" method="post">
         
            <h1>User Registration Page</h1>

            <hr>

             <div class="form-group">
              <label for="email"><b>Name</b></label>
              <input type="text" class="form-control" placeholder="Enter Name" name="uname" id="name" required>
            </div>

            <div class="form-group">
              <label for="email"><b>Email</b></label>
              <input type="text" class="form-control" placeholder="Enter Email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="psw"><b>Password</b></label>
                <input type="password" class="form-control" placeholder="Enter Password" name="psw" id="psw" required>
            </div>

          
        	
          <div class="form-group">
          	<label for="psw-repeat"><b>Phone Number</b></label>
              <input type="number" class="form-control" placeholder="number" name="pnumber"  required>
            </div>

             <div class="form-group">
              <label for="address"><b>Address</b></label>
              <textarea class="form-control" placeholder="Address" name="address" required></textarea>
          </div>

            <hr>
           

            <button type="submit" name="submit" class="btn btn-success">Register</button>
          </div>
          
          <div class="text-white text-center signin my-4">
            <p>Please Signin if you have a account <a href="index.php">Sign in</a></p>
          </div>

        </form>

        </div>

<?php  

    if(isset($_POST["submit"])){  

      user_register();

    }  
?>  
</body>
</html>
