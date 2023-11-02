<?php
$imie = "";
$nazwisko = "";
$przycisk = "DODAJ";
$id = '';
mysqli_report(MYSQLI_REPORT_OFF);
$conn=@mysqli_connect("localhost","root","","dsidorowicz");
if(!$conn) die('Brak połączenia z MYSQL');
if(isset($_GET['akcja']))
    switch($_GET['akcja'])
    {
        case 'USUŃ':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                mysqli_query($conn, "DELETE FROM pracownicy_4ic_2 WHERE id_pracownika=$id") or die('DELET ŹLE');
            };
            break;
        case 'DODAJ':
            if(isset($_GET['imie'], $_GET['nazwisko'])){
                $imie = $_GET['imie'];
                $nazwisko = $_GET['nazwisko'];
                mysqli_query($conn,"INSERT INTO pracownicy_4ic_2(imie,nazwisko) VALUES('$imie', '$nazwisko')") or die('INSER ŹLE');
            };
            break;
        case 'EDYTUJ':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $rs = mysqli_query($conn,"SELECT imie,nazwisko FROM pracownicy_4ic_2 WHERE id_pracownika=$id") or die('INSER ŹLE');
                $row = mysqli_fetch_array($rs);
                $imie = $row['imie'];
                $nazwisko = $row['nazwisko'];
                $przycisk = 'ZAPISZ';
            };
            break;
        case 'ZAPISZ':
            if(isset($_GET['imie'], $_GET['nazwisko'])){
                $imie = $_GET['imie'];
                $nazwisko = $_GET['nazwisko'];
                $id=$_GET['id'];
                mysqli_query($conn,"UPDATE pracownicy_4ic_2 SET imie='$imie',nazwisko='$nazwisko' WHERE id_pracownika=$id") or die('UPDAT ŹLE');
                $imie = '';
                $nazwisko = '';
                $id = '';
            };
            break;
    };

$result=mysqli_query($conn,"SELECT id_pracownika as id,imie,nazwisko FROM pracownicy_4ic_2") or die('SELEC ŹLE');
if(mysqli_num_rows($result)>0)
{
    $counter = 1;
    echo '<table border=1><tr><th>Lp</th><th>Imię</th><th>Nazwisko</th><th>Usuwanie</th><th>Edycja</th><th>Y</th></tr>';
    while($row=mysqli_fetch_array($result))
    {
        echo '<form><tr><td>', $counter, '</td><td><input type="hidden" name="id" value="',
        $row['id'],'">',$row['imie'], '</td><td>', $row['nazwisko'] , 
        '</td><td><input type="submit" name="akcja" value="USUŃ">
        </td><td><input type="submit" name="akcja" value="EDYTUJ"></td>
        <td>Feliz Navidad</td>
        </tr></form>';
        $counter++;
    };
    echo '</table>';
};
mysqli_close($conn);
echo "
<br>
<form>
    <input type='hidden' name='id' value='$id'>
    Imie <input type='text' name='imie' id='imie' value='$imie'>
    Nazwisko <input type='text' name='nazwisko' id='nazwisko' value='$nazwisko'>
    <input type='submit' name='akcja' value='$przycisk'>
</form>
";

?>