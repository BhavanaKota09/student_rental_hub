<?php
  
  include("includes/header.php");
  include("includes/sidebar.php");
  
if($_SESSION['role'] != 2){
    
    header("Location: home.php");
  
  }

?>
<style>



/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #f9b00c;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<body onload="showAlert()">


  <div class="container">
      <form action="" method="post" class="pt-4">
     
          <h1 style="text-align: center;">Add a Rooms</h1>
          <p>Enter the Rooms details.</p>
          <hr>
      
      <div class="form-group">

          <label for="name"><b>Rooms Name</b></label>
          <input type="text" class="form-control" placeholder="Enter the Name" name="Hname" id="Name" value= "" required>
      </div>

     

       <div class="form-group">
        <label for="name"><b>Room Number</b></label>
          <input type="number" class="form-control" placeholder="Phone Number" 
          name="pnumber" maxlength="10" value= "" required>
      </div>

      <div class="form-group">
        <label for="name"><b>Room Email</b></label>
          <input type="email" class="form-control" placeholder="Email" name="email"  value= "" required>
      </div>

      <div class="form-group">
          <label for="address"><b>Room Address</b></label>
          <textarea class="form-control" placeholder="Address" name="address" required></textarea>
      </div>

          <hr>
          <button type="submit" class="registerbtn"  name="submit">Add Rooms</button>
        </div>
      </form>

</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


<?php  
if(isset($_POST["submit"])){  

    addrooms();

}
?>
</body>
</html>
