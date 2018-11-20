 
<!DOCTYPE html>
<html>
<body>
<h1>funtion PHP</h1>
<br><?php
$number=array(1,2,34,45,52,90);
rsort($number);
 $arrlength= count($number);
for($b=0; $b< $arrlength; $b++){
echo $number[$b];
echo"<br>";
}
function familyName($fname) {
    echo "$fname <br>";
}

familyName("Monika");
familyName("namrta");
familyName("Sudhir");
familyName("Mdhurendra");
familyName("saroj");

function setheight($minhieght=50){
echo"the Hight is: $minhieght";}
setheight();
setheight(340);
 
$cars = array("volvo","BMW", "Toyota");
$arrlength=count($cars);
for($x=0; $x<$arrlength; $x++){
echo $cars[$x];
echo"<br>";}
 short($cars);
?> 
</body>
</html>
