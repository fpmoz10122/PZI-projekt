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
	$ime = $_POST["ime"] ;
	$prezime = $mysqli->real_escape_string($_POST['prezime']);
	$korisnicko_ime = $_POST["korisnicko_ime"] ;
	$email = $mysqli->real_escape_string($_POST['email']);
	$lozinka = $_POST["lozinka"] ; 


$sql = "INSERT INTO korisnici (id, ime, prezime, korisnicko_ime,email, lozinka)" 
		. "VALUES ('', '$ime','$prezime','$korisnicko_ime','$email','$lozinka')";

		
		if($mysqli->query($sql)===true){
            $_SESSION['message'] = "Uspjesna registracija!";
            header("location: prijava.php");
		}
		else {
			$_SESSION['message'] = "Nije uspjelo" ;
		}
			
}

?>


<html>
<head>
<title> Registracija </title>


</head>
<style>

.center {
		margin:auto;
		width:35%;
		padding:50px;
		}
		
body {font-family: Arial;
	
}


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

.form-group{
	width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
	}


/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

.btn {
    text-decoration: none;
    background: lightgreen;
    color: white;
    padding: 20px;
    margin: 20px;
    line-height: 35px;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
	
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


}
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}


}
</style>

<body>
<div class="center">
<form  method="post" style="border:1px solid #ccc"  >
  <div class="container"> 
    <h1>Registracija</h1>
    <p>Popunite sljedeća polja kako biste napravili račun.</p>
    <hr>
	
	<label><b>Ime</b></label>
    <input type="text"  name="ime" required>
	
	<label><b>Prezime</b></label>
    <input type="text"  name="prezime" required>
	
	<label><b>Korisničko ime</b></label>
    <input type="text"  name="korisnicko_ime" required>

    <label><b>Email</b></label>
    <input type="text" name="email" required>

	<label><b>Lozinka</b></label>
	<input type="password" id="myInput" name="lozinka"   required>
   
    <input type="checkbox" onclick="myFunction()">Prikaži lozinku <br><br>	
	
	
	
                
	
	<div class="clearfix">
      <a href="prijava.php"><button type="button" class="cancelbtn">Nazad</button></a>
      <button type="submit" class="signupbtn">Registriraj se</button>
    </div>
	</form>
	
	<h1>  <?=$_SESSION['message'] ; ?> </h1>	
  
  </div>

 <script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
   </script>

</body>
</html>
