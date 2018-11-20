
<html>
<body>
<h1>Sum of Even Numbers and Odd  number</h1>
<?php
$b=0;
$d=0;
for($i=0; $i<=10; $i++)
{
if($i%2==0){
$a= $i;

$b=$b+$a;
}
else{
$c=$i;

$d=$d+$c;
}
}

echo "even number sum is: $b<br>";
echo "odd number sum is : $d";
?>
</body>
</html>
 
