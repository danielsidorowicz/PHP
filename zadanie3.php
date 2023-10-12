<?php

    $tekst = $_GET['tekst'];
    // $tekst = 'tekst i zadanie'
    echo $tekst, '<br>';
    echo strlen($tekst);
    echo '<br>';
    // echo substr($tekst,3,1), '<br>';

    for($i=0; $i<strlen($tekst);$i++)
    {
        $tab[$i]=substr($tekst,$i,1);
        echo $tab[$i];
        echo '<br>';
    };

    $i = 0;
    $punkt = 0;

    for($j=0;$j<strlen($tekst);$j++)
    {
        if($tab[$j] == ' ')
            $wyrazy[$i] = substr($tekst,$punkt,$j);
        
        if($tab[$j] == ' ')
            $dlugosc = strlen($tab[$i]);
        if($tab[$j] == ' ')
            $punkt = $j;
        if($tab[$j] == ' ')
            $i++;
    };
    echo '<br>'; 
    for($i=0; $i<3;$i++)
    {
        echo $wyrazy[$i];
        echo '<br>';    
    };

    echo substr($tekst,0,5);
    
?>