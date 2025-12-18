<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
$umur = $thn_sekarang - $thn_lahir;
 return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum"){
echo $salam.", ";
 echo "Perkenalkan, nama saya ".$nama."<br/>";
 // memanggil fungsi lain
 echo "Saya berusia ". hitungUmur(1994, 2015) ." tahun<br/>";
 echo "Senang berkenalan dengan anda<br/>";
}
// memanggil fungsi perkenalan
perkenalan("Ardianta");
?>
Fungsi rekursif :
Save : rekursif.php
<?php
function faktorial($angka) {
 if ($angka < 2) {
 return 1;
 } else {
 // memanggil dirinya sendiri
 return ($angka * faktorial($angka-1));
 }
}
// memanggil fungsi
echo "faktorial 5 adalah " . faktorial(5);
?>