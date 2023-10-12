<?php
    $liczba1 = $_GET['liczba'];
    $liczba2 = $_GET['liczba2'];
    $wynik = 0;
    if($_GET['dzialanie'] == "dodawanie") {
        $wynik = $liczba1+$liczba2;
    } else
    if($_GET['dzialanie'] == "odejmowanie") {
        $wynik = $liczba1-$liczba2;
    } else
    if($_GET['dzialanie'] == "mnozenie") {
        $wynik = $liczba1*$liczba2;
    } else
    if($_GET['dzialanie'] == "dzielenie") {
        $wynik = $liczba1/$liczba2;
    };
    echo "$wynik";
?>