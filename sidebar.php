
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<?php

  if($_SESSION['role'] == 2){

  	echo ' <a href="addaowner.php">Add a Owner</a> <a href="addarooms.php">Add Room</a> ';
}else if($_SESSION['role'] == 1){
	echo ' <a href="view-appointments.php">Appointments</a>';
}else{
	echo ' <a href="History.php">Appointments History</a>
	 <a href="upcoming.php">Upcoming Appointments</a>

  <a href="booking.php">Book Appointment</a>';
}
 
 ?>
 
</div>