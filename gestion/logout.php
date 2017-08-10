<?php
    sesion_start();
    sesion_destroy();
    header('location:index.php');
?>