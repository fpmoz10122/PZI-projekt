<?php
$error='Test';
if(isset($_POST['submit'])) {

	
	if(empty($_POST['korisnicko_ime']) || empty($_POST['lozinka']))
	{ 
		$error = "Username or password is invalid" ;
	}
	else
	{
		$korisnicko_ime=$_POST['korisnicko_ime'];
		$lozinka=$_POST['lozinka'];
		
		


		$conn=mysqli_connect("localhost", "root","");
		$db = mysqli_select_db($conn,"projektl");
		$query = mysqli_query($conn, "SELECT * FROM korisnici WHERE korisnicko_ime='$korisnicko_ime' AND lozinka='$lozinka'");
		
		$rows =mysqli_num_rows($query);
		if(($korisnicko_ime == 'admin') && ($lozinka == '12345'))
		{
			echo "<script> window.location.assign('admin_panel.php'); </script>";
		}
		elseif($rows > 0) {
			echo "<script> window.location.assign('stolovi.php'); </script>";
		}
		else{
			$error= "Pogrešna lozinka ili korisničko ime!" ;
			echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
		}
		
		
		mysqli_close($conn);
	} 
	
}
	
?>