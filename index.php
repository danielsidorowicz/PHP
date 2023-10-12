<!-- // komentarz
# komentarz
/*
    KOMENTARZ
*/ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Przyklad kodu PHP w dokumencie HTML</title>
    <style>

        html{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
        }

    </style>
</head>
<body>
    <form method="GET">
        <input type="number" name="liczba"><br>
        <input type="submit" name="Prześlij" value="Oblicz">
    </form>
    <?php
    echo("<b><i>PHP</i></b><br>");
    echo("To jest tekst wyświetlany przez skrypt PHP");
    print('<br>Tekst ze znacznikami<b> HTML</b><br>');
    echo("Konkatenacja"." tekstów<br>");
    echo "<br>";

    // zmienne
    define("PI", 3.141592653);
    $r=10;
    echo 2*PI*$r;

    echo "<br>";

    // logika
    echo "True w PHP dostaje wartosc ".True;
    echo "<br>a False NULL  ".False;

    echo "<br>";

    // przyklad operatory
    echo $r==10; // true
    echo "<br>";
    echo $r=='10'; // true
    echo "<br>";
    echo $r==='10'; // false

    while($r <= 15){
        $obwod=2*PI*$r;
        echo "Obwód koła o promieniu ".$r." wynosi: ".$obwod."<br>";
        $r++;
    };

    // instrukcje decyzyjne (if,elseif,else // while // itd.)

    $num = 24;
    if($num%2==0){
        echo "Liczba parzysta";
    }
    else {
        echo "Liczba nie parzysta";
    };

    // skrocony if
    // (warunek)?prawda:falsz

    //switch

    echo "<br>";

    $liczba1=13;
    $liczba2=0;
    $operator='/'; // =,-,*,/
    switch($operator)
    {
        case '+':
            echo $liczba1 + $liczba2;
            break;
    
        case '-':
            echo $liczba1 - $liczba2;
            break;
    
        case '*':
            echo $liczba1 * $liczba2;
            break;
    
        case '/':
            if($liczba2==0){
                echo "nie mozna podzielic przez 0";
                break;
            }
            echo $liczba1 / $liczba2;
            break;
        
        default:
            echo "Błędny operator";
    };
    
    echo "<br>";
    for($i = 1; $i<=10; $i++){
        $z = 11-$i;
        echo "$i $z <br>";
    };

    $wh=1;
    echo "<br>";
    if(isset($_GET['liczba']))
        while($wh<$_GET['liczba'])
        {
            echo "$wh ".(11-$wh)."<br>";
            $wh++;
        }
    ?>
</body>
</html>