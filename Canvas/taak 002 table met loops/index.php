<?php
$array=[ 'PHP'=>'5.5', 'Java'=>'6.5', 'Engels'=>'7.0', 'Nederlands'=>'6.5','Veilig Programmeren'=>'8.0'];
echo "<table border=2 width=40%>";
foreach ($array as $vakken => $cijfers) {
    
    echo "<tr>";
    echo "<td>".$vakken."</td>";
    echo "<td>" .$cijfers. "</td>";
    echo "</tr>";
}
echo "</table>";
?>