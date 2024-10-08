<?php

	function user_register(){

		global $dbconn;

		$uname = validate($_POST['uname']);
		$email = validate($_POST['email']);
		$password = validate($_POST['psw']);
		$phonenumber = validate($_POST['pnumber']);
		$address = validate($_POST['address']);

		insertdata("INSERT INTO users (name, email, password, phone, role_id, address)
					VALUES ('$uname', '$email', '$password', '$phonenumber','3', 
						'$address') " );

	}

function validate($value) {

  global $dbconn;

  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  $value = mysqli_escape_string($dbconn, $value);

  return $value;

}

function insertdata($param){

	echo $param;

 	global $dbconn;

 	$result = mysqli_query($dbconn,$param);

 	if(!$result){
 		echo '<script> alert("something went wrong") </script>';
 	}
 	else{
 		echo '<script> alert("Done successfully") </script>';

 	}
}

function fetch($param){

	global $dbconn;

 	$result = mysqli_query($dbconn,$param);
 	$data = [];
 	while($row = mysqli_fetch_assoc($result)){

 		array_push($data,$row);

 	}
 	return $data;
}


function userlogin(){


	$email =  validate($_POST['email']);
 	$pass =   validate($_POST['pass']);

	$data = fetch( "select * from users where email = '$email' and password = '$pass' " );


	if(count($data) > 0){

		foreach($data as $u){
			$name =  $u['name'];
			$id =  $u['id'];
			$role =  $u['role_id'];
		}

		$_SESSION['name'] = $name;
		$_SESSION['uid'] = $id;
		$_SESSION['role'] = $role;

		if($_SESSION['name']){

			header('Location: home.php ');
		}

	}
	else{
		echo '<script>alert("credentials are incorrect" )</script>';
	}
		

}





function addowner(){

	$name = validate($_POST['Fullname']);
	$pass = validate($_POST['pass']);
	$pnumber = validate($_POST['pnumber']);
	$email = validate($_POST['email']);
	$address = validate($_POST['address']);
	
	
	insertdata("INSERT INTO users (name, email, password, phone, role_id, address)
				VALUES ('$name', '$email', '$pass', '$pnumber','1','$address') " );
	
	}

function addrooms(){

	$name = validate($_POST['Hname']);
	$pnumber = validate($_POST['pnumber']);
	$email = validate($_POST['email']);
	$address = validate($_POST['address']);
	
	insertdata("INSERT INTO rooms (name,email,pnumber,address)
				VALUES ('$name', '$email','$pnumber','$address') " );
	
	}



function ownerlist(){


	$data = fetch( "select * from  users  where role_id = '1' " );


	if( count($data) > 0 ){
	foreach($data as $value){

		echo '<option value ="'.$value['id'].'" > '.$value['name'] .'</option>';
	}
}


}

function rooms(){


	$data = fetch( "select * from  rooms");


	if( count($data) > 0 ){
	foreach($data as $value){

		echo '<option value ="'.$value['id'].'" > '.$value['name'] .'</option>';
	}
}


}


function  upcoming(){

	$id = $_SESSION['uid'];

	$data = fetch( "select appointments.*,users.name  from appointments INNER JOIN users on appointments.owner = users.id  where bdate > now() AND appointments.user_id = '$id' " );


	if( count($data) > 0 ){
	foreach($data as $value){

		echo '<tr><td>'.$value['name'].'</td>
			<td>'.$value['how_many_members'].'</td> 
			<td>'.$value['edate'].'</td> 
			<td>'.$value['etime'].'</td> </tr>

		';
	}

}
else{
		echo "<h3 class='text-center text-danger pb-3'>No appointments</h3>";
	}
}


function  booking(){

	$owner = validate($_POST['owner']);
	$problem = validate($_POST['problem']);
	$acc = validate($_POST['acc']);
	$date = validate($_POST['date']);
	$appt = validate($_POST['appt']);
	$id = $_SESSION['uid'];
	
	insertdata("INSERT INTO appointments (owner, user_id,problem, account_number,bdate,btime)
				VALUES ('$owner','$id','$problem', '$acc','$date','$appt') " );

}

?>