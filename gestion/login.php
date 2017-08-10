<?php
    include_once "./inc/conex.php";
   
    $usuario = isset($_POST['user']) ? $_POST['user'] : '';
    $contraseña = isset($_POST['pass']) ? $_POST['pass'] : '';
    $_SESSION['user']=$usuario;
    $_SESSION['pass']=$contraseña;

        $log = mysql_query("SELECT user, pass FROM usuarios WHERE        user='$usuario' AND pass='$contraseña'");
    
    if($reg=mysql_fetch_array($log)){
        session_start();
        $nombreusuario= $usuario;
        echo"Bienvenido!".$usuario;
        header('Location: menu.php');
    }else{
       echo '<script type="text/javascript">'
   , 'alert("Usuario y/o contraseña incorrectos");'
   , '</script>'
;
        echo '<script type="text/javascript">'
   , 'location.href="index.php";'
   , '</script>'
;
    }
?>