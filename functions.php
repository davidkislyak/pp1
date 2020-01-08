<?php
function printArr($arr) {
    foreach($arr as $x) {
        echo "<p>$x</p>";
    }
}

function largest($arr) {
    $biggest = $arr[0];

    foreach ($arr as $x) {
        if ($biggest < $x) {
            $biggest = $x;
        }
    }

    return $biggest;
}