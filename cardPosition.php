<html>
<body><h1>Card Assignment</h1>
<?php
$Card=array("1","2","3","4","5","6","7","8","9","0","6","5","4","3","2","1");
$length=count($Card);
echo "card length: $length<br>";
for($i=1; $i<=$length; $i++){
if($i<=12){
echo"*";
}

else{
break;
}
}
echo "$Card[12]$Card[13]$Card[14]$Card[15]";

?>
</body>
</html>
