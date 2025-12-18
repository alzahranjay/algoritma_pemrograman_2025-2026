<?php
// membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
 echo $salam.", ";
 echo "Perkenalkan, nama saya ".$nama."<br/>";
 echo "Senang berkenalan dengan anda<br/>";
}
// memanggil fungsi yang sudah dibuat
perkenalan("Muhardian", "Hi");
echo "<hr>";
$saya = "Indry";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($saya);
?>
Fungsi yang Megembalikan Nilai :
Save : mengembalikan-nilai.php
<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
 $umur = $thn_sekarang - $thn_lahir;
 return $umur;
}
echo "Umur saya adalah ". hitungUmur(1994, 2015)."tahun";
?>