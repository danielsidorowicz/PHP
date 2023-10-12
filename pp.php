<?php
function pp($liczba1,$liczba2)
{
    echo "Pole prostokąta o podanych wymiarach wynosi: ", $liczba1*$liczba2;
}
$liczba1 = $_GET['liczba'];
$liczba2 = $_GET['liczba2'];
pp($liczba1,$liczba2)

?>