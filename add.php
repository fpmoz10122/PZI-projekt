<?php
 
include 'connection.php';
 error_reporting(0);
  $name = $_POST['ime'];
  $lastname = $_POST['prezime'];
  $username = $_POST['korisnicko_ime'];
  $email = $_POST['email'];
  $pass = $_POST['lozinka'];
  
if($_POST['submit']){
 
$sql = "INSERT INTO korisnici (id, ime,prezime,korisnicko_ime,email,lozinka)
VALUES ('', '$name','$lastname','$username', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo '<div class="alert alert-success" role="alert">Uspješno dodan novi korisnik!</div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>Dodavanje korisnika</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
   <a style="margin:20px;" class="btn btn-secondary" href="admin_panel.php">Povratak na admina</a>
	    <h2 class="text-center">Dodaj nove podatke:</h2>
		<form style="width: 40%;margin:15px auto;" class="form-group" action="add.php" method="POST">
			Ime: <input class="form-control" type="text" name="ime" value="" required><br><br>
			Prezime: <input class="form-control" type="text" name="prezime" value="" required><br><br>
			Korisničko ime: <input class="form-control" type="text" name="korisnicko_ime" value="" required><br><br>
			Email: <input class="form-control" type="email" name="email" value="" required><br><br>
			Lozinka: <input class="form-control" rows="4" cols="50" name="lozinka" value="" required><br>
			<input type="submit" class="btn btn-info btn-block" name="submit" value="Predaj"/>
</body>


</html>