<?php
require_once('../model/db.php');

if (isset($_GET['query'])) {
    $query = mysqli_real_escape_string($conn, $_GET['query']);
    $sql = "SELECT * FROM employees WHERE name LIKE '%$query%' OR contact_no LIKE '%$query%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>ID: {$row['id']} - Name: {$row['name']} - Contact: {$row['contact_no']}</p>";
        }
    } else {
        echo "<p>No results found</p>";
    }
}
?>
