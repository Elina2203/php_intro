<?php
include"head.php";
$n1=5;
echo $n1;
echo "<br>";

$n2=10;
echo $n1+$n2;
echo "<br>";



function multiply($x, $y) {

 return $x * $y;
}
echo multiply (7,3);
echo "<br>";


echo expon($n1, $n2);
function expon($x,$y){
if ($y>0) {
return  $x * expon($x, $y-1);
}
return 1;

}