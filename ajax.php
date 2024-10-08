<?php
    include("includes/db.php");
	
	if(isset($_POST['rooms'])){

		$id = $_POST['hospital'];
		$html = '';
		$query = "select * from  users  where role_id = '1'";
		$result = mysqli_query($dbconn,$query);
 		
	 	while($row = mysqli_fetch_assoc($result)){

	 	$html .='<option value ="'.$row['id'].'" > '.$row['name'] .'</option>';

	 	}

	 	echo $html;

	}


?>