<?php 
    define('DB_SERVER','mysql.hostinger.es');
    define('DB_NAME','u529178504_gest');
    define('DB_USER','u529178504_admin');
    define('DB_PASS','VioleGrace1234');
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    if (!$con) { die('Error connecting to the database: ' . mysql_error()); }
    mysql_select_db(DB_NAME,$con);
?>