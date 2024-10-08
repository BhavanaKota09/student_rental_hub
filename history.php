<?php
  
  include("includes/header.php");
  include("includes/sidebar.php");

    if($_SESSION['role'] != 3){
    
    header("Location: home.php");
  
  }


?>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  width: 100%;
  length: 100%;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number] {
width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #cd1409;
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

<form action="" method="post">

  <div class="container">
    <h1 style="text-align: center;" class="pb-4"> Appointments History</h1>

      <table class="table table-bordered ">
        <tr>
          <th>Doctor</th>
          <th>Problem</th>
          <th>Date</th>
          <th>Time</th>
        </tr>
        <?php  

          history();

        ?>

      </table>

</div>





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
