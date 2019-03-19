<?php
include 'connection.php';



if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $date = $_POST["resdate"] ;
    $table = $_POST['tables'];
    $mem = $_POST["members"] ;
    $name = $_POST['name'];
    $email = $_POST["email"] ; 
    $mob = $_POST["phone"] ;
    $addr = $_POST["address"] ;
    if(!$conn) {
        die("Neuspješno povezivanje na bazu");
    }
    
    $sql = "UPDATE `rezervacije` SET `resdate` = '$date', `tables` = '$table', `members` = '$mem', `name`= '$name', `email` = '$email', `phone` ='`$mob', `address` = '$addr' WHERE `rezervacije`.`id` = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-warning" role="alert">Uspješno ažuriran korisnik!</div>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izmjeni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .container {
            width: 30%;
            margin-bottom: 50px;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
        }
    </style>

</head>

<body>
    <a style="margin:20px;" class="btn btn-secondary" href="admin_panel.php">Povratak na admina</a>
    <div class="container">
        <h1>Izmjeni Rezervaciju</h1>
        <form action="izmjeni_rezervaciju.php" method="post">
            <div class="form-group">
                <label for="resdate">Datum</label>
                <input name="resdate" type="date" class="form-control" id="resdate" required="required">
            </div>
            <div class="form-group">
                <label for="tables">Stol</label>
                <input name="tables" type="text" class="form-control" id="tables" placeholder="primjer: Stol 1">
            </div>
            <div class="form-group">
                <label for="members">Broj članova</label>
                <input name="members" type="text" class="form-control" id="members" require="required">
            </div>
            <div class="form-group">
                <label for="name">Ime</label>
                <input name="name" type="text" class="form-control" id="name" require="required">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" require="required">
            </div>
            <div class="form-group">
                <label for="phone">Telefon</label>
                <input name="phone" type="text" class="form-control" id="phone" require="required">
            </div>
            <div class="form-group">
                <label for="address">Adresa</label>
                <input name="address" type="text" class="form-control" id="address" require="required">
            </div>
            <div class="form-group">
                <label for="id">ID</label>
                <input name="id" type="number" class="form-control" id="id" require="required">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</body>

</html>