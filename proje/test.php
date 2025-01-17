<!DOCTYPE html>
<html lang=>
<head>
    <title>Universite Program Olustur</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }
    body{
        background: linear-gradient(to right, #313131, #8f8f8f);
        background-size: cover;
        font-family: "Arial", Helvetica, sans-serif;
    }
    .tablo table {
    margin-top: 20px;
    margin-left: 135px;
    width: 80%; 
    border-collapse: collapse; 
    table-layout: fixed; 
    border-color: #313131;
    border-width: 0px;
}

.tablo th,.tablo td {
    width: 20%; 
    height: 50px; 
    text-align: center; 
    vertical-align: middle;     
    border: 1px solid #ddd; 
    padding: 5px; 
    box-sizing: border-box;     
    overflow: hidden;   
    white-space: nowrap;    


}

.tablo th {
    background-color: #313131; 
    color: #f2f2f2;
  } 

tr:nth-child(even) {background-color: #c6c6c6;} 
tr:nth-child(odd) {background-color: #d7d5d5;}

p{
    text-align: center;
    border: none;
    color: #c6c6c6;
    margin: 10px; 
    margin-top: 20px;
    background-color: #313131;
    padding: 10px;
    border-radius: 7px;
    width: 100px;
    margin-left: 650px;

}

p a{
    color: #f08282;
    text-decoration: none;
}
    </style>
</head>
<body>
    <div class="tablo">
    <table>
        <tr>
            <th>Id</th>
            <th>Kullanıcı Adı</th>
            <th>Email</th>
        </tr>
    </div>    
        <?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Bağlantı kurulamadı");
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $id = $row["id"];
    $fullname = $row["full_name"];
    $email = $row["email"];
    
    echo "<tr>
            <th scope='row'>$id</th>
            <td>$fullname</td>
            <td>$email</td>
          </tr>";
}
?>
    </table>
    <div><p><a href="login.php">Giriş yap</a></p></div>
</body>
</html>