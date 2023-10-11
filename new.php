<?php
$car = array("Kia","BMW","Toyota");
sort($car);
$arrlengeth=count($car);
for($x=0;$x<$arrlengeth;$x++){
echo $car[$x];
echo"<br>";

}
$age = array("Ahmad"=>"35","Sara"=>"37","Safin"=>"43",);
foreach($age as $x => $x_value){
    echo "Key= " . $x ." ","Value=".$x_value," ";
    echo"<br>";
}

$cars=array(
array("kia",22,18),
array("BMW",15,38),
array("Toyota",5,2),
array("Nissan",17,15),
);
ksort($cars);

for ($row=0;$row<4;$row++) {
echo "<p><b>Row number $row</b></p>";
echo "<ul>";
for($col = 0; $col<3;$col++){
    echo"<li>".$cars[$row][$col]."</li>";

}
echo"</ul>";
}

?>