<?php
$change = $argv[1];

if ($change) {
    echo intval($argv[1]). " x 1 euro";
} 
if ($change == 0) {
    echo "Geen wisselgeld";
}
?>