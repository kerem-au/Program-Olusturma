<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universite Program Olustur</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="topbar">  <!--  topbar kısmını oluşturur -->
            <a>Universite Program Olustur</a>
            <a class="isim">Kerem Ozcan</a>
    </div>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: asıl.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
        <h2>Giriş Formu</h2>
        <div class="form-group">
            <input type="email" placeholder="Email" name="email" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Şifre" name="password" class="form-control"  autocomplete="off">
        </div>
        <div class="form-btn">
            <input type="submit" value="Giriş yap" name="login" class="btn btn-primary">
        </div>
      </form>
     <div class="t"><p>Hesap Oluşturmadın mı? <a href="registration.php">Burdan Olabilirsin</a></p></div>
    </div>

    <h4><a href="test.php">Kullanıcılar</a></h4>
</body>
</html>