<?php
include('conexio.php');
$sql = "SELECT * FROM productes";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<h2>Llista Productes:</h2>";
echo "<table border=1 class='taulaProductes' >";
$contador = 0;
$numImg = 1;
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr class='producte' >";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo  "<td {$contador} ++ class='propiedades' >{$value} </td>" ; // I just did not use "htmlspecialchars()" function.
    }
    $contador = 0;
    echo "</tr>";
}
echo "<tr>";
for ($i=0; $i < 4 ; $i++) {
    echo "<td> <input type='text' required></td>";
}
echo "</tr>";
echo "</table>";
