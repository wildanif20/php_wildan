<?php
$jml = $_GET['jml'];
$jml = intval($jml);

function fibonacci($value)
{
  $before_value = $value;
  $next_value = $value-1;
  $hasil = "$before_value $next_value";

  for ($i = 0; $i < $value ; $i++) {
    $output = $next_value + $before_value;
    $dump = $output;
    $hasil = $hasil . " $output";
    $before_value = $dump;
    $next_value = $next_value-1;
  }
  return $dump;
}


echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--) {

  echo "<tr>\n";
  echo "<th colspan='4'>TOTAL :".fibonacci($a)."</th>";
  echo "</tr>\n";
  echo "<tr>\n ";
  for ($b = $a; $b > 0; $b--) {
    echo "<td>$b</td>";
  }
  echo "</tr>\n";
}
echo "</table>";

?>

<!-- echo "<tr>\n";
  echo "<th>TOTAL : </th>";
  echo "</tr>\n"; -->