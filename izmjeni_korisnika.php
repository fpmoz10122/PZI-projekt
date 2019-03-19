<?php
include 'connection.php';



if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['ime'];
    $lastname = $_POST['prezime'];
    $username = $_POST['korisnicko_ime'];
    $email = $_POST['email'];
    $pass = $_POST['lozinka'];
    if(!$conn) {
        die("Neuspješno povezivanje na bazu");
    }
    
    $sql = "UPDATE `korisnici` SET `ime` = '$name', `prezime` = '$lastname', `korisnicko_ime` = '$username', `email`= '$email', `lozinka` = '$pass' WHERE `korisnici`.`id` = '$id'";

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
        <h1>Izmjeni Korisnika</h1>
        <form action="izmjeni_korisnika.php" method="post">
            <div class="form-group">
                <label for="ime">Ime</label>
                <input name="ime" type="text" class="form-control" id="ime">
            </div>
            <div class="form-group">
                <label for="prezime">Prezime</label>
                <input name="prezime" type="text" class="form-control" id="prezime">
            </div>
            <div class="form-group">
                <label for="korisnicko_ime">Korisničko ime</label>
                <input name="korisnicko_ime" type="text" class="form-control" id="korisnicko_ime">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="lozinka">Lozinka</label>
                <input name="lozinka" type="password" class="form-control" id="lozinka">
            </div>
            <div class="form-group">
                <label for="id">ID</label>
                <input name="id" type="number" class="form-control" id="id">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</body>

</html>