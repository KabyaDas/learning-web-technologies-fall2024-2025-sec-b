<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    if (empty($day) || empty($month) || empty($year)) {
        echo "Error: All fields are required.";
    } elseif (!checkdate($month, $day, $year)) {
        echo "Error: Invalid date.";
    } else {
        echo "Date of Birth: $day/$month/$year";
    }
}
?>