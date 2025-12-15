<?php 

function perkenalan($nama, $salam="Assalamualaikum"){ 
echo $salam.", "; 
echo "Perkenalkan, nama saya ".$nama."<br/>"; 
echo "Senang berkenalan dengan anda<br/>"; 
} 

perkenalan("Anita", "Hi"); 
echo "<hr>"; 
$saya = "Mingyu"; 
$ucapanSalam = "Selamat pagi"; 

perkenalan($saya); 
?>