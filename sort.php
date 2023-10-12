<?php
function g($ile)
{
    echo '<br>';
    for($i=0;$i<$ile;$i++)
    echo '*';
}
for($i=1;$i<11;$i++)
{
    $tab[$i] = rand(1,100);
    echo $tab[$i], ' ';
}
g(25);
sort($tab);
echo '<br>Posortowane:<br>';
for($i=0;$i<10;$i++)
{
    if($tab[$i]>50)
        echo $tab[$i], ' ';
}
g(100)
?>