<?php
$fruits=array("apple", "mango", "banana", "grape", "orange", "guava", "malta");
$searched_element="banana";
echo "Fruits: ";
print_r ($fruits);
echo "<br>";
$flag="a";
foreach($fruits as $i=>$j){
    if($j==$searched_element){
        $flag="b";
        echo "The element is found in index $i of the array";
    }
    else{
        continue;
    }
}
if($flag!="b"){
    echo "The element is not found in the array";
}
?>