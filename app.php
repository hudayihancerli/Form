<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <!-- <link href="./style.css" rel="stylesheet" type="text/css" /> -->
    <style><?php include 'C:\wamp64\www\ödev/style.css'; ?></style>

</head>
<body>
    <div class="container">
        <div class="görsel">
            <img src="./logo.svg" class="logo" alt="Logo">
            <img src="./Online presentation_Flatline.svg" class="resim" alt="resim">
        </div>
       <form  id="form" name="form" method="post" action="test.php">
           <label for="firstname" >Ad :</label><input type="text" placeholder="Mahmut Hüdayi" id="firstname" name="firstname">
           <label for="lastname" >Soyad :</label><input type="text" placeholder="Hançerli" id="lastname" name="lastname">
           <label for="mail" >Mail :</label><input type="email" placeholder="mailText@gmail.com" id="mail" name="mail">
           <label for="telefon" >Telefon :</label><input type="tel" placeholder="0555 555 55 55" id="telefon" name="telefon">
           <label for="yas" >Yas :</label><input type="number" placeholder="21" id="yas" name="yas">
           <label for="password" >Password :</label><input type="password" placeholder="***********" id="password" name="password">
           <input type="submit" value="Kayıt ol" id="submit" name="submit">
       </form>
    
    </div>
</body>
<script src="./app.js"></script>
</html>