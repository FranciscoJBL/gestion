            function validar(){
              
                   document.getElementById("msj").style.display = "block";
                   iniciarsesion.submit();
            }
                
           
            function validarClave(){
               var user, pass;
               user=document.iniciarsesion.user.value;
               pass=document.iniciarsesion.pass.value;              
               if(user.length==0){
                   $("#msj").html("Por favor ingrese su nombre de usuario");
                   document.getElementById("msj").style.display = "block";
               }else if(pass.length==0){
                   $("#msj").html("Por favor ingrese su contraseña");
                   document.getElementById("msj").style.display = "block";
               }else{
                    
                   validar();
               }
           }