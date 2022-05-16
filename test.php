<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt</title>
    <style><?php include 'C:\wamp64\www\ödev/style.css'; ?></style>
</head>
<body>
    <div class="container">
        
    <?php

        $baglan =  mysqli_connect("localhost","root","","socialmedia");

        if($baglan-> connect_error){
            die("Bağlantı hatası : ".mysqli_connect_error());
        }

        $firstname  = $_POST["firstname"];
        $lastname  = $_POST["lastname"];
        $mail  = $_POST["mail"];
        $telefon  = $_POST["telefon"];
        $yas  = $_POST["yas"];
        $password  = $_POST["password"];
        $submit  = $_POST["submit"];

        $userAdd = "insert into users(userFirstname, userLastName, userMail, userTelefon, userYas, userPassword) values         ('$firstname','$lastname','$mail','$telefon','$yas','$password')";
        echo '<div class="test">';
        if($baglan->query($userAdd))
        {
            echo '<p class="testText">Social Media uygulamamıza basarıyla kaydoldunuz :)</p>';
            echo '<a class="testLink" href="http://localhost/%c3%b6dev/app.php">Ana Sayfa</a>';
        }else{
            echo '<p class="testText">Malesef kayıt islemi basarısız :( </p>';
            echo '<a class="testLink" href="http://localhost/%c3%b6dev/app.php">Ana Sayfa</a>';
        }
        echo "</div>";
    ?>
    </div>
</body>
</html>
