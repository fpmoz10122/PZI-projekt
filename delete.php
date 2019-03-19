<?php
 
include 'connection.php';
 error_reporting(0);
  $name = $_POST['ime'];

  
if($_POST['submit']){
 
 
$sql = "DELETE FROM korisnici 
WHERE id = '$name' " ;

if (mysqli_query($conn, $sql)) {
    echo '<div class="alert alert-danger" role="alert">Korisnik je uklonjen!</div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>Brisanje korisnika</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    form {
    width: 40%;
    margin: 10px auto;
    padding: 10px;
    text-align: center;
}
</style>

</head>

<body>
    <a style="margin:20px;" class="btn btn-secondary" href="admin_panel.php">Povratak na admina</a>
    <div class="container">
	    <h4 class="text-center"> Za brisanje korisnika potrebno je unijeti korisnikov ID </h4>
	    <form action="delete.php" method="POST">
			ID: <input type="text" name="ime" value="" required><br><br>
			<input type="submit" class="btn btn-info" name="submit" value="Predaj"/>
			<br>
		</form>
	</div>

</body>


</html>