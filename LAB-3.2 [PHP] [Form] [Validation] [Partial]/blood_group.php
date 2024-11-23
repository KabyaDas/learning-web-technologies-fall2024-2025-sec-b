<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blood_group = $_POST['blood_group'];

    if (empty($blood_group)) {
        echo "Error: Blood group must be selected.";
    } else {
        echo "Blood Group: " . htmlspecialchars($blood_group);
    }
}
?>
