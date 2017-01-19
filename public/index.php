<?php

    require '../vendor/autoload.php';
    // phpinfo();

    $db_connection = new PDO('mysql:host=mysql.server.com;dbname=library', 'acme', 'paris');
    
    kint::dump($db_connection);
?>
