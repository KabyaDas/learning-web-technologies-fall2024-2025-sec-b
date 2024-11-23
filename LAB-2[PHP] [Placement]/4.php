<?php
$a=13;
$b=23;
$c=42;

echo "Three given numbers: $a, $b, $c<br>";
if($a>$b && $a>$c){
    echo "The largest number: $a";
}
elseif($b>$a && $b>$c){
    echo "The largest number: $b";
}
else{
    echo "The largest number: $c";
}
?>