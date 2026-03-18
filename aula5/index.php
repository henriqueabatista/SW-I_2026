<?php
$MSG = "Sua média é: ";
$nome = "User";
$M1 = 0;
$M2 = 0;
$M3 = 0;
$media = 0;
$media = (($M1 + $M2 + $M3)/3);

if ($media >= 9) {
    echo "MB";
}
if ($media < 8 && $media >= 7) {
    echo "B";
}
if ($media < 7 && $media >= 4) {
    echo "R";
}
if ($media < 4 && $media >=1 ) {
    echo "I";
}

if ($media == 0) {
    echo "N/A";
}
?>