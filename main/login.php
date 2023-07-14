<?php
$user = 'g211210026@sakarya.edu.tr';
$pass = 'g211210026';

$error_message = '';

if(isset($_POST['username']) && isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if($username == $user && $password == $pass){
    header('Location:hosgeldiniz.html');
    exit();
  } else{
    $error_message = 'Geçersiz kullanıcı adı veya şifre.';
  }
}
?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İletişim</title>
    <link rel="stylesheet" href="/css(stil dosyasi)/genel.css" />
    <link rel="stylesheet" href="/css(stil dosyasi)/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <style>
    .login {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  font-family: Arial, sans-serif;
}

form {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  padding: 20px;
  width: 400px;
  height:300px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 20px;
  margin-bottom: 30px;
  border: 2px solid #ccc;
  border-radius: 5px;
}

button {
  background-color: #704327;
  color: #fff;
  border: none;
  padding: 10px;
  border-radius: 5px;
  width: 100%;
  cursor: pointer;
  width:100px;
  margin-left:140px;
}

button:hover {
  background-color: #b5b486;
}

#error-message {
  color: #ff0000;
  font-size: 14px;
  margin-top: 10px;
  text-align: center;
  opacity: 1;
  transition: opacity 0.5s ease;
}

#error-message.hide {
  opacity: 0;
}

  </style>

  <header>
    <div style="display: inline-block; margin-top: 20px; width: 100%"></div>
    <a
      id="giris"
      style="
        background-color: #704327;
        color: #b5b486;
        border-bottom: 5px solid #b5b486;
        border-right: 5px solid #b5b486;
        border-top: 1px solid #b5b486;
        border-left: 1px solid #b5b486;
        border-radius: 10px;
      "
      href="login.php"
      ><i class="fa-solid fa-right-to-bracket"></i> Giriş Yap</a
    >
    <div style="display: inline-block; width: 88%; text-align: right">
      <nav id="main-navbar">
        <a href="/index.html"><i class="fa-solid fa-house"></i> Hakkımda</a>
        <a href="ozgecmis.html"
          ><i class="fa-solid fa-user-graduate"></i> Özgeçmiş</a
        >
        <a href="sehrim.html"><i class="fa-solid fa-city"></i> Şehrim</a>
        <a href="mirasimiz.html">Mirasımız</a>
        <a id="ilgi" href="ilgi-alanlarim.html">İlgi Alanlarım</a>
        <a href="iletisim.html"
          ><i class="fa-solid fa-envelope"></i> İletişim</a
        >
      </nav>
    </div>
  </header>

  <body>

<div class="login">
<form method="POST" action="">
      <input type="text" name="username" placeholder="Kullanıcı Adı:" required> <br> <br>
      <input type="password" name="password" placeholder="Şifre:" required><br><br>
      <button type="submit">Giriş Yap</button>
      <div id="error-message"><?php echo $error_message; ?></div>

<script>

  setTimeout(function(){
    var errorMessage = document.getElementById('error-message');
    if(errorMessage){
      errorMessage.style.display = 'none';
    }
  }, 3000);
</script>


    </form>
</div>
  </body>
</html>
