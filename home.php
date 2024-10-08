

<?php
  
  include("includes/header.php");
  
  include("includes/sidebar.php");

?>


<div>
<h3 style="margin-top: 175px;text-align: center;">Welcome to Student Rental Hub !! <?php
echo $_SESSION['name']; ?>
</h3>

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