<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
<title>Noćni klub "Black" </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>

        .reservation-form-holder {
	float:center;
	width:560px;
	height:360px;
}
#reservation-form h3 {
	float:center;
	width:560px;
	height:360px;
	margin-bottom:30px;
	text-align:left;
	font-size:20px;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:1px;
}
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
   
    
}
.menu {
    display: none;
}

body {
		background-size: 1365px 675px;
		}




.container {
    padding: 40px;
	}
	
.center {
		margin:auto;
		width:65%;
		padding:100px;
		}
input, textarea {
    width: 100%;
    margin: 5px 0;
}
		
		

}
</style>
</head>

<body style="background-image:url(img/rendering-shapes-visualization-cubes-abstraction-figures-black-background.jpg">

    <div class="w3-col s12">
        <a href="odjava.php" class="w3-button w3-block w3-black" style="font-size:27px"> ODJAVA</a>
    </div>

    <h2 text-align="center" style="color:red "> Raspored stolova možete pogledati <a href="raspored.jpeg" target="_blank">
            ovdje </a> </h2>
            <h1 style="padding:5px;color:green;text-align:center"><?php echo $_SESSION['message']; ?></h1>
    <div class="center">
        <form method="post" style="border:1px solid #ccc">
            <div class="container">
                <h2 style="color:white">Ispunite sljedeća polja kako biste rezervirali stol:</h2>

                <hr>


                <input type="date" name="resdate" required="required" />

                <span style="color:white">Stol:</span> <select name="tables">
                    <option value="Stol 1">1</option>
                    <option value="Stol 2">2</option>
                    <option value="Stol 3">3</option>
                    <option value="Stol 4">4</option>
                    <option value="Stol 5">5</option>
                    <option value="Stol 6">6</option>
                    <option value="Stol 7">7</option>
                    <option value="Stol 8">8</option>
                    <option value="Stol 9">9</option>
                    <option value="Stol 10">10</option>
                    <option value="Stol 11">11</option>
                    <option value="Stol 12">12</option>
                    <option value="Stol 13">13</option>
                    <option value="Stol 14">14</option>
                    <option value="Stol 15">15</option>
                    <option value="Stol 16">16</option>
                    <option value="Stol 17">17</option>
                    <option value="Stol 18">18</option>
                    <option value="Stol 19">19</option>
                    <option value="Stol 20">20</option>
                    <option value="Stol 21">21</option>
                    <option value="Stol 22">22</option>
                    <option value="Stol 23">23</option>
                    <option value="Stol 24">24</option>
                    <option value="Stol 25">25</option>
                </select>


                <select name="members">

                    <option value="2 osobe">2 Osobe</option>
                    <option value="3 osobe">3 Osobe</option>
                    <option value="4 osobe">4 Osobe</option>
                    <option value="5 osoba">5 Osoba</option>
                    <option value="6 osoba">6 Osoba</option>
                    <option value="7 osoba">7 Osoba</option>
                    <option value="8 osoba">8 Osoba</option>
                </select>
                <br> <br>


                <input type="text" name="name" placeholder="Ime" class="cus_form form-control" required="required" />

                <input type="email" placeholder="Email " name="email" class="cus_form form-control" required="required" />
                <br>

                <input type="text" placeholder="Telefon" class="cus_form form-control" name="phone" required="required" />

                <textarea class="cus_form form-control" placeholder="Adresa" rows="4" name="address"></textarea>
                <br>
                <br>
                <button type="submit" name="submit" class="cus_form_btn">Rezerviraj!</button>

            </div>
        </form>






    </div>















</body>

</html>