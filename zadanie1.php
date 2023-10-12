<?php
$ile = 0;

for($i=1;$i<31;$i++)
{
    $tab[$i] = rand(-20,20);
    echo $tab[$i], '<br>';
}

$tab_wypisane[1] = '';

echo '<br>';

for($j=1;$j<31;$j++)
{
    for($k=1;$k<31;$k++)
    {
        if($tab[$j]==$tab[$k])
            $tab_repeat[$j] = $tab[$k];
    };
};

for($x=1;$x<31;$x++)
{

    if(in_array($tab_repeat[$x], $tab_wypisane))
        echo $tab_repeat[$x], ' ';
    else
        echo '';
    $tab_wypisane[$x] = $tab_repeat[$x];


};

// echo $ile, ' liczb wystepuje wiecej niz raz';

?>