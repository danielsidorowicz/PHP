<?php
$row = 0;
$column = 0;

echo '<table style="text-align: center;">';

for($rzedy=1;$rzedy<6;$rzedy++)
{
    echo '<tr>';
    for($kolumny=1;$kolumny<9;$kolumny++)
    {
        if($kolumny == 1 || $rzedy == 1)
            echo '<td>', '<b>', $column + $kolumny, '</b>', '</td>';
        else
            echo '<td>', $rzedy*$kolumny, '</td>';
    };
    $column+=1;
};


?>