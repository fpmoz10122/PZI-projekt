<html>
<head>
<title>Admin </title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>

#options {
    width: 30%;
	margin: 10px auto;
}

h1 {
	margin: 50px 0;
}

</style>
</head>


<body>

	<nav class="navbar navbar-light bg-light">
	<span class="navbar-brand mb-0 h1">Administrator</span>
  <a class="navbar-brand text-right" href="adminlogout.php">Odjava</a>
</nav>

<div id="header">
<center><img src="img/ikona.jpg">
</center>
</div>

<div id="options">

<a class="btn btn-success btn-block" href="add.php"> Dodaj korisnika </a>
<a class="btn btn-danger btn-block" href="delete.php"> Ukloni korisnika </a>
<a class="btn btn-danger btn-block" href="brisirez.php"> Ukloni rezervaciju </a>
	
</div>

<div class="container" id="data">
<br><br>

<center><h1>Podaci korisnika:</h1></center>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
	  <th scope="col">Korisničko ime</th>
	  <th scope="col">Email</th>
	  <th scope="col">Lozinka</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  <?php 
    include 'connection.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM korisnici";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><th scope='row'>".$row['id']."</th><td>". $row['ime']. "</td><td>".$row['prezime']."</td><td>".$row['korisnicko_ime']."</td><td>".$row['email']."</td><td>".$row['lozinka']."</td><td><a href='izmjeni_korisnika.php' class='btn btn-warning'>Izmjeni</a></td></tr>";
	 }
} else {
    echo "<h3><center>Podaci nisu pronađeni!<center></h3>";
}
  ?>
    </tbody>
</table>

 <center><h1>Podaci rezervacija:</h1></center>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Datum</th>
      <th scope="col">Stolovi</th>
	  <th scope="col">Članovi</th>
	  <th scope="col">Ime</th>
	  <th scope="col">Email</th>
	  <th scope="col">Telefon</th>
    <th scope="col">Adresa</th>
    <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

 <?php
		include 'connection.php';
		
		$sqll = "SELECT * FROM rezervacije" ;
		$rezultat = mysqli_query($conn,$sqll);
		
		if (mysqli_num_rows($rezultat) > 0) {
   
    while($row = mysqli_fetch_assoc($rezultat)) {
      $izmjeni = "<td><a href='izmjeni_rezervaciju.php' onclick='setId(".$row['id'].")' class='btn btn-warning'>Izmjeni</a></td>";
	    echo "<tr><th scope='row'>".$row['id']."</th><td>". $row['resdate']. "</td><td>".$row['tables']."</td><td>".$row['members']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['address']."</td>".$izmjeni."</tr>";

    }
    } else {
      echo "<h3><center>Podaci nisu pronađeni!<center></h3>";
    }
?>
  </tbody>
</table>
</div>
 <script>

  function setId(id){
    alert("Za izmjenu ove rezervacije obavezno unesite id " + id + " u polje ID!")
  }
     
 </script>
</body>
</html>