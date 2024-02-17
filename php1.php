<?php
//komentar untuk satu paragraf (//)
/*komentar untuk banyak paragraf */

// materi pertemuan 1 - PHP dasar
// Sintaks PHP

// Standart Output
// echo, print (berguna untuk menampilkan output)
echo "Yadi pakai echo <br>";
echo 123;
echo "<br>";
echo true; //hasilnya bernilai 1
echo false; //hasilnya kosong buka bernilai 0
echo "<br>";
print "Yadi pakai print <br>";

// print_r (khusus digunakan untuk mencetak array)
print_r("Yadi pakai print_r <br>");

// var_dump (digunakan untuk melihat isi variable dan bila di pakai akan menampilkan jumlah suku angka yg di input)
var_dump("Yadi pakai var_dump");
// Print_r & var_dump biasa di pakai untuk debugging atau untuk mencari kesalahan


/*Assignment atau penugasan (=, +=, -=, *=, /=, %= digunakan untuk perhitungan / aritmatika)
(.= digunakan untuk penggabungan string) */
$z = 1; //ini sama aja di jumlahkan walaupun variabelnya sama
$z .= 5; //dikarenakan ada operator + di awal =, bila operator + diganti menjadi - maka penjumalahan nya menjadi 1 - 5 = -4
echo "<br>";
echo $z;
echo "<br>";

$nama = "Nurcah";
$nama .= "yadi"; //ini menggunakan assignment (.=) untuk menggabungkan kata "Nurcahya" dan "yadi"
$nama .= " "; //ini untuk memberi space pada penggabungan sebelum nya
$nama .= "Belajar"; //ini semua akan tampil menjadi (Nurcah + yadi + Belajar + PHP) Nurcahyadi Belajar PHP
$nama .= " ";
$nama .= "PHP";
echo $nama;
echo "<br>";


/*variable & tipe data
//variable ($) dan variable tidak boleh diawali dengan angka, tapi boleh mengandung angka
*/
$var = "ini menggunakan variable";
echo "$var <br>"; //menggunakan variable
$var1 = "ini variable mengandung angka";
echo "$var1 <br>"; //menggunakan variable


/*operator
//penggabung string / concatenation / concat*/
$nama_depan = "Yadi";
$nama_belakang = "doang";
echo $nama_depan . " " . $nama_belakang . " <br>"; //Penggabungan String dengan menggunakan "."

/*operator
arimatika (+ - * / %) */
$x = 10;
$y = 10;
echo "di bawah menggunakan variable aritmatika <br>";
echo $x * $y; //variable arimatika
echo "<br>";

/* operator perbandingan (< , > , <=, >=, ==, !=) 
Biasa nya di pakai saat pengkondisian*/
var_dump(1 < 5); //hasilnya true
echo "<br>";
var_dump(1 > 5); //hasilnya false
echo "<br>";
var_dump(1 <= 5); //hasilnya true
echo "<br>";
var_dump(1 >= 5); //hasilnya false
echo "<br>";
var_dump(1 == 5); //hasilnya false
echo "<br>";
var_dump(1 == "1"); //hasilnya true dikarenakan operator perbandingan ini tidak mengecek tipe datanya hanya ngecek nilainya
echo "<br>";

/* operator identitas (===, !==) 
biasanya untuk mengecek nilai atau tipe data*/
var_dump(1 === "1"); //hasilnya false dikarenakan memang di cek tipe datanya, "1" tipe string tidak sama dengan 1 tipe integer
echo "<br>";
echo "<br>";

/* operator logika (&&, ||, !) 
biasanya di pakai untuk pengkondisian */
$i = 10;
$o = 30;
var_dump($i < 20 && $i % 2 == 0); //hasilnya true karena dua kondisi perbandingan ini harus bernilai true kalo pakai logika &&
echo "<br>";
var_dump($o < 20 && $o % 2 == 0); //hasilnya false karena dua kondisi perbadingan nya pakai && dan diharuskan kedua nya harus trus maka akan jadi hasilnya false
echo "<br>";
echo "<br>";


?>
<!-- Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Halo, Selamat Datang
        <?php echo $nama_depan ?>
    </h1>
    <p>
        <?php echo "Ini adalah PHP di dalam HTML" ?>
    </p>
</body>

</html>