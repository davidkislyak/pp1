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

function removeDups($arr) {
    $return = [];

    foreach ($arr as $x) {
        if (!in_array($x, $return)) {
            $return[] = $x;
        }
    }

    return $return;
}