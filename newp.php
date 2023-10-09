<?php
$x =5;
$y =5;
function myTest() {
global $y ;
global $x ;
$d =4;
echo $status = ($d>2) ? "d is bigger": "d is smaller";
echo $status = $x ?? 20;
echo"<p>Variable y inside function is : $y </p>";
echo"<p>Variable x inside function is : $x </p>";

if($x and $y>2){
    echo"<p> x is equal</p>";
}

}
myTest();
$x+=$y;
echo"<p>Variable x outside function is : $x </p>";
echo"<p>Variable y outside function is : $y </p>";
?>
