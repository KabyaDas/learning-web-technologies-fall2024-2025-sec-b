<?php
for($i=0;$i<=2;$i++){
    for($j=0;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";
for($i=3;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "$j ";
    }
    echo "<br>";
}
echo"<br>";
$alphabet=array("A", "B", "C", "D", "E", "F");
$k=0;
        for($i=0;$i<=2;$i++){
            for($j=0;$j<=$i;$j++){
        echo $alphabet[$k++]." ";
    }
    echo"<br>";
}
?>