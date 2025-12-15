<?php 

function perkenalan($nama, $salam){ 
echo $salam.", "; 
echo "Perkenalkan, nama saya ".$nama."<br/>"; 
echo "Senang berkenalan dengan anda<br/>"; 
} 

perkenalan("Anita", "Hi"); 
echo "<hr>"; 
$saya = "Rafi"; 
$ucapanSalam = "Selamat pagi"; 
 
perkenalan($saya, $ucapanSalam); 
?>