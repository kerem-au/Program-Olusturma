function dersekle() {
    const kursadi = document.getElementById("kursadi").value; /* değişkenleri tanımla */ 
    const gün = document.getElementById("gün").value;
    const başlama = document.getElementById("başlama").value;
    const bitme = document.getElementById("bitme").value;
    const derslik = document.getElementById("derslik").value;

    if (!kursadi || !gün || !başlama || !bitme) {       /* boşluklar doldurulmayınca hata verir */ 
        alert("tüm yerleri doldurun");
        return;
    }

    const derstablo = document.getElementById("derstablo"); /* tabloyu tanımlayıp atar */ 
    const başlamasaat = parseInt(başlama.split(":")[0]); /* girilen saati 8:00 dan 8 yap */
    const bitmesaat = parseInt(bitme.split(":")[0]);

    var renk = "#464646"; /* arkaplan rengini belirle */

    for (let i = 0; i < derstablo.rows.length; i++) {    /* doğru yeri bulana kadar tabloyu iteratele */
        const row = derstablo.rows[i];
        const zaman = parseInt(row.cells[0].textContent.split(":")[0]);

        if (zaman >= başlamasaat && zaman < bitmesaat) {
            const günler = ["Pazartesi", "Sali", "Çarşamba", "Perşembe", "Cuma"].indexOf(gün) + 1;
            row.cells[günler].innerHTML += `<div class="ders" style="background-color:${renk}; text-align: center;">${kursadi}<br>${derslik}</div>`; /* dersi html ile ekle */
        }
    }

    document.getElementById("kursadi").value = "";    /* ekledikten sonra formları sıfırla */
    document.getElementById("gün").value = "Pazartesi";
    document.getElementById("başlama").value = "";
    document.getElementById("bitme").value = "";
    document.getElementById("derslik").value = "";

}