<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Universite Program Olustur</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="topbar">  <!--  topbar kısmını oluşturur -->
            <a>Universite Program Olusturucu</a>
            <a class="isim">Kerem Ozcan</a>
    </div>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();

           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";

            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>Basarili Olarak Kayit Yapildi.</div>";
            }else{
                die("Hata meydana geldi");
            }
          

        }
        ?>
        <form action="registration.php" method="post">
            <h2>Kayıt Formu</h2>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Kullanıcı Adı"  autocomplete="off">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Şifre"  autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Tekrardan Şifre"  autocomplete="off">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Kayıt ol" name="submit">
            </div>
        </form>
        <div>
        <div><p>Hesabın var mı? <a href="login.php">Burdan giriş yap</a></p></div>
      </div>
    </div>
</body>
</html>