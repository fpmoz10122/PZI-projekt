
<?php
include("loginserv.php");
?>


<html>
<head>
<title> Prijava </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
body {
		background-size: 1365px 675px;
		}

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {

  position: relative;
  background: rgba(#FFFFFF, 0.8);
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 600px 0 rgba(100, 100, 100, 1), 0 5px 5px 0 rgba(0, 0, 0, 0.9);
   }
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #000080;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  
}
.form button:hover,.form button:active,.form button:focus {
opacity: 0.8;
  
}
.form .message {
  margin: 15px 0 0;
  color: white;
  font-size: 20px;
}
.form .message a {
  color: white;
  text-decoration: none;
}
.form .message a:hover{
	text-decoration:underline;
	}
	
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: blue;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}


</style>
<body style="background-image:url(img/klub.jpg);  background-size:cover;   align=center;" >
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
	<br> 
	<br>
    <form class="login-form" method="post" action="" >
      <input type="text"  id="korisnicko_ime" placeholder="Korisnicko Ime" name="korisnicko_ime" required />
	  
      <input type="password" id="lozinka" placeholder="Lozinka" name="lozinka" required  >
      <button type="submit"  name="submit" id="submit" >Prijava</button>
      <br>
	  <p class="message">Nemate račun? 
	  <br><br><br><br>
	  <a href="registracija.php "rel="nofollow" dir="ltr">Registracija</a></p>
    </form>
  </div>
</div>


</body>
</html>