<?php

  include("includes/header.php");
  
  include("includes/sidebar.php");

if($_SESSION['role'] != 3){
    
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
</head>
<body onload="showAlert()">
 

  <div class="container">
      
      


<form action="" method="post">



  <div class="container">
    <h1 style="text-align: center;" class="py-4">Book Appointment</h1>
    <hr>
  <div>



    <div class="form-group">
    <label for="account"><b>Select Rooms</b></label> 

    
      
      <select  name="rooms"  class="form-control" id ="rooms" required>
        <option value="0">Select Rooms</option>  

        <?php
          rooms();
        ?>
      </select>
    </div>

    <div class="form-group">
    <label for="account"><b>Select Owner</b></label> 


      
      <select  name="owner"  class="form-control" required id="owner">
        <option value="0">Select Owner:</option>  
      </select>
    </div>

 <div class="form-group">
  <label for="problem"><b>Mention Problem</b></label> 
  <input  type="text"  name="problem" class="form-control" placeholder="Mention Problem">
  
</div>

 <div class="form-group">
<label for="address"><b>Booking Date</b></label>  
<input  type="date"  name="date" class="form-control" min="<?php echo date('Y-m-d')?>">
  
</div>
  
 <div class="form-group">
<label for="address"><b>Booking Time</b></label>  
    <input  type="time"  name="appt" class="form-control" />
  </div>


<div>
    <label for="reaccount"><b>Account Number for booking</b></label>  
    <input type="number" placeholder="Enter Account Number"class="form-control" name="acc" value= "" required>
    <p class="pt-2"> Payable amount is $ 25</p>
</div>

    <hr>
    <button type="submit" class="registerbtn"name="submit" >Book Appointment</button>
  </div>
</form>
</div>


<?php  
if(isset($_POST["submit"])){  

    booking();

}
?>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>
  