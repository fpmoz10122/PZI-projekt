<?php
 
include 'connection.php';
 error_reporting(0);
  $id = $_POST['id'];

  
if($_POST['submit']){
 
 
$sql = "DELETE FROM rezervacije
WHERE id = '$id' " ;

if (mysqli_query($conn, $sql)) {
    echo '<div class="alert alert-danger" role="alert">Rezervacija je uklonjena!</div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

if(isset($_GET['submit'])){

    $sql = "DELETE FROM rezervacije";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-danger" role="alert">Sve rezervacije su uklonjene!</div>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<html>
<head>
<title>Brisanje rezervacija</title>
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
	    <form action="brisirez.php" method="POST">
			ID: <input type="text" name="id" value="" required><br><br>
			<input type="submit" class="btn btn-info" name="submit" value="Predaj"/>
			<br>
        </form>
        <form action="brisirez.php" method="GET">
			<br><br>
			<input type="submit" class="btn btn-danger btn-block" name="submit" value="Izbriši sve rezervacije"/>
			<br>
		</form>
	</div>
</body>


</html>