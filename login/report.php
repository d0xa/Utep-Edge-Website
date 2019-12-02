<?php
        $mysqli = new mysqli('localhost', 'user', 'pass', 'mis_db');

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit();
}

$stck = $_POST['Stock'];
$itm = $_POST['Items'];