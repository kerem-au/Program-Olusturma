<!DOCTYPE html>
<html>
    <head>
        <title>Universite Program Olustur</title>

        <script src="dene.js"></script>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="topbar">  <!--  topbar kısmını oluşturur -->
            <a>Universite Program Olustur</a>
            <a class="isim">Kerem Ozcan</a>
        </div>

        <div class="kutu">
            <div class="form-kutusu"> <!-- girilecek boşlukları select ve input ile oluşturulur -->
                <input type="text" id="kursadi" placeholder="Ders Adi">
                <select id="gün">
                    <option value="Pazartesi">Pazartesi</option> <!-- seçecenkler olarak günler verilir-->
                    <option value="Sali">Sali</option>
                    <option value="Çarşamba">Carsamba</option>
                    <option value="Persembe">Persembe</option>
                    <option value="Cuma">Cuma</option>
                </select>
                <input type="time" id="başlama">    <!-- derslerin başlama bitme ve hangi dersliklerde olduğu girilir-->
                <input type="time" id="bitme">      
                <input type="text" id="derslik" placeholder="Derslik">
                <button onclick="dersekle()">Dersi Ekle</button> <!-- dersleri tabloya eklemek için button eklenilir sonra javascript ile yazılır-->
            </div>

            <div class="tablo"> <!-- tablo oluşturulur-->
                <table id="derstablo">
                    <tr>
                        <th>Saat</th>
                        <th>Pazartesi</th>
                        <th>Sali</th>
                        <th>Carsamba</th>
                        <th>Persembe</th>
                        <th>Cuma</th>
                    </tr>
                    <tr><td>8.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td>9.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td>10.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td>11.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td>12.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td>13.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td>14.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td>15.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td>16.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td>17.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td>18.00</td><td></td><td></td><td></td><td></td><td></td></tr>
                </table>
            </div>
        </div>
        <br>
        <br>
    </body>
</html>