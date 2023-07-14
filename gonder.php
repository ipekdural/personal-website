<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>İletişim</title>
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
	<style>
    body {
      background-image: url(/images/arkaplan1.jpg);
      background-repeat: no-repeat;
      background-position: center center;
      background-attachment: fixed;
      background-size: cover;
      font-family:"Roboto Mono";
      margin: 0;
    }
    
    .container {

      max-width: 600px;
      margin: auto;
      
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      opacity:0.8;
    }
    .container div{
        border:1px solid #632e0d;
        padding: 20px;
        border-radius:10px;
        margin-top:10px;
        border: 2px solid #aaa;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
    
    h1 {
      text-align: center;
      margin-bottom: 30px;
      color:#632e0d;
      background-color: #bf784c;
      border-radius: 10px;
      border: 2px solid #aaa;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
    
    
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #704327

    }
    
    p {
      margin-bottom: 20px;
    }
    
    b {
      font-weight: normal;
      color: #333;
    }
    
    
    .button-back {
      display: flex;
      justify-content: center;
      margin-top: 30px;
  
    }
    
    .button-back a {
      text-decoration: none;
      padding: 10px 20px;
    
      border: 2px solid #aaa;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      background-color:#bf784c;
      border-radius:5px;
      color:#fff;
      font-weight:bolder;
      
      
    }
    *{
      box-sizing:border-box;
    }
    a:hover{
        opacity:0,5;
    }
    @media screen and (max-width: 600px) {
      .box {
        width: 100%;
        padding-right: 0;
      }
    }
	</style>
</head>
<header><br><br><br><br></header>
<body>
	<?php 
	if (!$_POST){
	    echo("Error!");
	}
	else{
	    $isim_soyisim = $_POST["isim-soyisim"];
	    $e_posta = $_POST["e-posta"];    
	    $telefon = $_POST["telefon"];
	    $sehir = $_POST["sehir"];
	    $konu = $_POST["konu"];
	    $mesaj = $_POST["mesaj"];}
	?>
<div class="container">
  
<div class="button-back" style="border:none;display:inline-block;"><a href="index.html"><i class="fa-solid fa-house"></i> Anasayfa</a></div>
<div class="button-back" style="border:none;display:inline-block;margin-left:150px;"><a href="/main/iletisim.html"><i class="fa-solid fa-envelope"></i> İletişim</a></div>
  <h1>BİLGİLERİNİZ</h1>
      <div><label>İsim-Soyisim:</label>
      <p><b><?php echo $isim_soyisim; ?></b></p></div>
      <div><label>E-Posta:</label>
      <p><b><?php echo $e_posta; ?></b></p></div>
      <div><label>Telefon:</label>
      <p><b><?php echo $telefon; ?></b></p></div>
      <div><label>Şehir:</label>
      <p><b><?php echo $sehir; ?></b></p></div>

    
<div>      <label>Konu:</label>
      <p><b><?php echo $konu; ?></b></p>
      <label>Mesaj:</label>
      <p><b><?php echo $mesaj; ?></b></p></div>
</div>

    </body>
    </html>