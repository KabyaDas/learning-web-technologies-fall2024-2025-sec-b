<?php

    session_start();
    unset($_SESSION['pqr']);
    session_destroy();

    header('location: login.html');

?>