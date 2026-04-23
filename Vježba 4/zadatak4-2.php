<?php 
function ducan($stanje = "otvoren"){
    echo "Dućan je $stanje";
}

$dan = date("D"); 
$sati = (int)date("H");

echo "Trenutačno je " . date("l, H:i") . "<br>";

if ($dan == "Sun") {
    ducan("zatvoren jer je nedjelja");
} 
else if ($dan == "Sat") {
    if ($sati >= 9 && $sati < 14) {
        ducan();
    } else {
        ducan("zatvoren (subotom radi od 09h do 14h)");
    }
} 
else if ($sati >= 8 && $sati < 20) {
    ducan();
} 
else {
    ducan("zatvoren izvan radnog vremena");
}
?>