<?php

function connect() {

    $pdo = new PDO('mysql:173.230.151.149;dbname=dev_carenet;', 'careext', 'u4x3dDlW7@DQ');
    return $pdo;
}

