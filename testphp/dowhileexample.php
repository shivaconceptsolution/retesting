<?php
$a=0;
$b=1;
$i=1;
echo $a,"<br>",$b,"<br>";
do{
    $c = $a+$b;
    echo $c,"<br>";
    $a=$b;
    $b=$c;
    $i++;

}while($i<=9);




?>