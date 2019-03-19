<?php

session_start();
$_SESSION['message'] = '';

$host='localhost';
$user='root';
$password='';
$db='projektl';


$mysqli = new mysqli($host, $user,$password,$db);
if($mysqli->connect_errno) {
	printf("connection failed: %s\n", $mysqli->connect_error);
	die();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$date = $_POST["resdate"] ;
	$table = $mysqli->real_escape_string($_POST['tables']);
	$mem = $_POST["members"] ;
	$name = $mysqli->real_escape_string($_POST['name']);
	$email = $_POST["email"] ; 
	$mob = $_POST["phone"] ;
	$addr = $_POST["address"] ;
	


$sql = "INSERT INTO rezervacije (id, resdate, tables, members, name, email, phone, address) VALUES ('','$date','$table','$mem','$name','$email', '$mob', '$addr')";

		
		if($mysqli->query($sql)===true){
			$_SESSION['message'] = "Uspjesna rezervacija! - " . $table;
		}
		else {
			$_SESSION['message'] = "Nije uspjelo" ;
		}
			
}

						
				



?>