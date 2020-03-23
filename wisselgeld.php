<?php
$geld = intval($argv[1]);
if ($geld >= 0) {
    print ($geld . "x 1 euro\n");
}elseif($geld > 0) {
    echo "geen wisselgeld";
}elseif($geld < 0) {
    echo "een min getal kan niet";
}
exit(0);
?>