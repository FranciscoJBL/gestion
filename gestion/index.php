<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Modulo de atencion</title>
        <link href="css/css.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="js/val.js"></script> 
    </head>
    <body>
           <div class="container">
            <?php include './inc/header.php'; ?>
            
           
            <div class="row top-buffer">
                <div class="col-md-6 col-md-offset-3">
                    <form role="form" name="iniciarsesion" method="post" action="login.php">
                         <div class="form-group">  
                            <label for="user">Nombre de usuario:</label>
                             <input type="text" class="form-control" name="user" placeholder="Introduce tu nombre de usuario">
                         </div>
                         <div class="form-group">  
                            <label for="pass">Contraseña:</label>
                            <input type="password" class="form-control" name="pass" placeholder="Introduce tu contraseña">
                        </div>
                       
                           <input type="button" class="btn btn-default" value="Iniciar sesión" onclick="validarClave()">
                      
                    </form>
                </div>
            </div>
            <div class="row">    
                <div class="col-md-6 col-md-offset-3" id="msj" class="col-md-4" style="display:none;">      
                </div>
            </div>
        </div>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
    </body>
</html>