<?php  

  session_start();
  
   if(isset($_SESSION['name'])){
         header("Location: home.php");
  }
include("includes/db.php");
include("includes/common.php");

if(isset($_POST["submit"])){  
    
    userlogin();
}


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<style>
body {
  font-family: "Lato", sans-serif;
  background-color: #e8e8e8;
  margin: 0px;
  background-image: linear-gradient( rgba(0, 0, 0, 0.8) , rgba(0, 0, 0, 0.8 ) ),url('images/login-bg.jpg');
  background-size: cover;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
label{
  color:#fff;
}
.loginBlock{
  height: 100vh;
}


</style>


</head>
<body>
  
  <div class="loginBlock w-50 mx-auto d-flex align-items-center">

  <form  action="" method="post" class="w-100">
  <div class="container">
    <h1 class="text-center text-white">Login Page</h1>
    <div class="imgcontainer">
    
    </div>

    <div class="container">
      <div class="form-group">
        <label for="uname"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" class="form-control" name="email" required>
      </div>

      <div class="form-group">
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" class="form-control"  name="pass" required>
    </div>


      <button type="submit" class=" btn btn-success" name="submit">Login  </button>
    </div>
   

    <div class="container">
      <span class="psw text-white">You can register here if you do not have an account,<a href="Register.php">Click Here!</a></span>
    </div>
	
	</div>
  </form>


</div>

<script>

</script>

</body>
</html>

<SCRIPT LANGUAGE="JavaScript">
document.SignUpPage.UsernameField.focus();
   function checkInputs()
   {
       var Prompts = "";
       Username = window.document.SignUpPage.UsernameField.value;
       Password = document.SignUpPage.PasswordField.value;
       RePassword = SignUpPage.RePasswordField.value;
       Name = SignUpPage.NameField.value;
       if (Username == "" || Password == "" || RePassword == "" || Name == "") {
          if (Username == "")
             Prompts +="Please enter your username!\n";
          if (Password == "")
             Prompts +="Please enter your password!\n";
       }else {
          document.SignUpPage.submit();
       }
   }

</SCRIPT>


