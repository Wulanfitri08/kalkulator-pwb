<?php

function sum($w1, $w2) {
    return $w1 + $w2;
}

function sub($w1, $w2) {
    return $w1 - $w2;
}

function mul($w1, $w2) {
    return $w1 * $w2;
}

function div($w1, $w2) {
    if ($w2 != 0) {
        return $w1 / $w2;
    } else {
        return "Tidak bisa dibagi dengan NOL!";
    }
}

$w1 = [7, 3, 10, 9];
$w2 = [1, 10, 5, 2];
$operator = ["+", "-", "x", ":"];

foreach ($operator as $index => $op) {
    $a = (int)$w1[$index];
    $b = (int)$w2[$index];

    if ($op == "+") {
        echo "$a + $b = " . sum($a, $b) . "<br>";
    } elseif ($op == "-") {
        echo "$a - $b = " . sub($a, $b) . "<br>";
    } elseif ($op == "x") {
        echo "$a x $b = " . mul($a, $b) . "<br>";
    } elseif ($op == ":") {
        echo "$a : $b = " . div($a, $b) . "<br>";
    } else {
        echo "Operator tidak dikenal<br>";
    }
}
?>
