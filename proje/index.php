<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
p a{
    color:#f08282;
    text-decoration: none;
    background-color: #1a1a1a;
    margin-left: 700px;
    align-self: center;
    padding: 10px;  
    border-radius: 10px;
}
body{
    background: linear-gradient(to right, #313131, #8f8f8f);
    background-size: cover;
    font-family: "Arial", Helvetica, sans-serif;
}

.container{
    margin-top: 300px;
}
.topbar {  /* topbarın style ayarları yapılır */
    background-color: #1a1a1a;
    height: 70px;
    border-radius: 20px;
    margin-top: 8px;
    margin-left: 10px;
    width: 98%;
  }

.topbar a {
    font-family: "Arial", Helvetica, sans-serif;
    float: left; /* öğeyi sol veya sağ tarafa hizala */
    color: #FFFFFF;
    text-align: center;
    padding-left: 40px; /* etrafına boşluk */
    padding-top: 20px;
    font-size: 23px;
    font-weight: bold;
  }

.topbar a.isim { 
    padding-left: 820px;  /* ismin sayfanın en sağsında olmasını sağlar */
}
    </style>
    <title>Universite Program Olustur</title>
</head>
<body>
    <div class="topbar">  <!--  topbar kısmını oluşturur -->
            <a>Universite Program Olusturucu</a>
            <a class="isim">Kerem Ozcan</a>
    </div>
    <div class="container">
    <p><a href="logout.php" class="">Çıkış Yapın</a></p>
    </div>
</body>
</html>