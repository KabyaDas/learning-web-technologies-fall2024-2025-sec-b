<?php
$shape = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];
for ($i=0; isset($shape[$i]); $i++) {
    for ($j=0; isset($shape[$i][$j]); $j++) {
        if ((int)$shape[$i][$j] == $shape[$i][$j]) {
            echo $shape[$i][$j] . " ";
        }
    }
    echo "<br>";
}
echo "<br>";
for ($i=0; isset($shape[$i]); $i++) {
    for ($j=0; isset($shape[$i][$j]); $j++) {
        if (!((int)$shape[$i][$j] == $shape[$i][$j])) {
            echo $shape[$i][$j] . " ";
        }
    }
    echo "<br>";
}
?>

