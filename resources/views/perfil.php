<script type="text/javascript">
   function servicio(id,n){
       const p = document.getElementById(id);
       if(n==1){
       p. innerHTML   ="";
       p . innerHTML  =  '-Lavado exterior<br> -Lavado interior<br>-Lavado de motor<br>-Encerado' ;
       }
       else{
           if(n==2){
            p. innerHTML   ="";
            p . innerHTML  =  '-Lavado exterior' ;
           }
           else{
               if(n==3){
                p . innerHTML   ="";
                p . innerHTML  =  '-Lavado exterior <br> -Encerado' ;
               }
           }
       }
    }
    
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        nav{
            height: 30px;
            margin: 20px;
        }
        .navegacion{
            display: inline;
            margin: 10px;
            padding: 10px;
        }
        .navegacion:hover{

            border-bottom: 1px solid white;
            
        }
        body{
            background: #0d0d0d;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            width: 90%;
            max-width: 1000px;
            border-radius: 10px;
            margin: 1.6em auto;
            padding: 5px;
            display: grid;
            grid-template-columns: repeat(2,1fr);
        }
        .header{
            grid-column: 1/3;
        }
       
        .article{
            margin: 5px;
            grid-column: span 2;
            display: grid;
            grid-template-columns: repeat(2,1fr);

        }
      
        .tipo_vehiculo{
            padding: 5px;
            border-top-left-radius: 5px;
            margin-right: 0px;
            border-bottom-left-radius: 5px;
            border: 2px solid #001f5f;
            border-right: 0px;
            grid-column: span 1;
            text-align: center;
            vertical-align: middle;
        }
        .servicio{
            padding: 5px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            margin-left: 0px;
            border: 2px solid #001f5f;
            border-left: 0px;
            grid-column: span 1;
        }
        .radio-group{
            color: lightcyan;
            
        }
 
        hr{
            border: 1px solid lightblue;
        }
        .button{
            background: none;
            color: white;
            border: 1px solid #001f5f;
            padding: 10px 24px;
            border-radius: 10px;
            transition-duration: 0.4s;
            width: 200px;
            text-align: center;
        }
        .button:hover{
            background-color: #001f5f; /* Green */
            color: white;
        }

        .radio + .radio{
            margin-left: 20px;
        }
        
      .radio:focus{
            
            border-bottom: 1px solid red;
        }

        #linea_servicios{
            border: 1px dashed lightcyan;
            margin: 10px;
        }

        .radio:hover{
            border-bottom: 2px solid white;
        }

        footer{
            height: 100px;
            bottom: 0px;
            background: black;
            color: whitesmoke;
            position: fixed;
            width: 100%;
        }

        a{
            color: gainsboro;
            text-decoration: none;
        }
    
    </style>
</head>
<body>
    
    <nav>
        <ul>
            <li class="navegacion"> <a href="perfil">MI CUENTA</a></li>
            <li class="navegacion"><a href="perfil/notificaciones">NOTIFICACIONES</a></li>
            <li class="navegacion"><a href="perfil/seguirlavado">SEGUIR LAVADO</a></li>
            <li class="navegacion"><a href="perfil/historial">HISTORIAL</a></li>
            <LI class="navegacion"><a href="ayuda">AYUDA</a></LI>
        </ul>
    </nav>
    <hr>

    <div class="container">
        <header class="header"><h1>Pedir lavado</h1></header>
        
        <?php

use Symfony\Component\Console\Input\Input;

use function PHPSTORM_META\type;

foreach($vehiculo as $v){ ?>    
         <article class="article">
                <section class="tipo_vehiculo">
               
                    
                    <?php echo $v->marca ?><br>
                    <?php echo $v->modelo ?><br>
                    <?php echo $v->chapa ?><br>
                
               
                </section>
                <section class="servicio">
                    <div class="radio-group">
                        <label class="radio">
                          <input type="radio" name="<?php echo $v->id ?>" value="servicio1" onclick="servicio(<?php echo $v->id; ?>,1)">
                          Lavado Full
                        </label>
                        <label  class="radio">
                          <input type="radio" name="<?php echo $v->id ?>" value="servicio2" onclick="servicio(<?php echo $v->id; ?>,2)">
                          Lavado Semi
                        </label>
                        <label class="radio">
                          <input type="radio" name="<?php echo $v->id ?>" value="servicio3" onclick="servicio(<?php echo $v->id; ?>,3)">
                          Lavado Economico
                        </label>
                        
                        
                       
                        
                        <hr id="linea_servicios">
                    </div>
                    <p id="<?php echo $v->id ?>"><br>Seleccionar Servicio <br> - </p> 
                    
                </section>
            </article>
        <?php } ?>
           
           
           
           
           
           
            <button class="button" type="button" >Agregar Vehiculo</button>
            <button class="button" type="button" >Realizar Pedido</button>
           
           
        
    </div>
    <footer>
        Pie de página
    </footer>
</body>
</html>

