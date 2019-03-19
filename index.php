
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
</head>
<title>Noćni klub "Black" </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
    height: 100%;
    width: 100%;
    font-family: "Inconsolata", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url(img/foto1.jpg);
    
}
.menu {
    display: none;
}

body {
    background-image:url(img/foto1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: black;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 20px;
    display: none;
    
}
</style>

<body>

<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black" >NASLOVNICA</a>
    </div>
    <div class="w3-col s3">
      <div id="flip">O NAMA</div>
<div id="panel">Noćni klub - Black, Mostar 88000. <br> Kontakt: 063-134-587 <br>  Radno vrijeme: srijeda, petak, subota - 23:00h - 06:00h </div>
    </div>
    <div class="w3-col s3">
      <a href="vizija.pdf" target="_blank" class="w3-button w3-block w3-black">VIZIJA</a>
    </div>
    
	  <div class="w3-col s3">
	  
      <a href="prijava.php" style="text-decoration:none " rel="nofollow" dir="ltr" class="w3-button w3-block w3-black" >PRIJAVA 
	  
	  </a>
    </div>
  </div>
</div>


<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    
  </div>
  <div class="w3-display-middle w3-center">
    
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    
  </div>
</header>




</body>
</html>