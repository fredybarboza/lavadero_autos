<script type="text/javascript">
   function servicio(id,n,cat){
       const p = document.getElementById(id);

       if(n==1){//Servicio 1
           switch(cat){
               case 1: p . innerHTML = '&#x2705;&#xfe0e Lavado Exterior<br>&#x2705;&#xfe0e Lavado de motor<br>&#x2705;&#xfe0e Lavado Interior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 80.000';
               break;
               case 2: p . innerHTML = '&#x2705;&#xfe0e Lavado Exterior<br>&#x2705;&#xfe0e Lavado de motor<br>&#x2705;&#xfe0e Lavado Interior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 90.000';
               break;
               case 3: p . innerHTML = '&#x2705;&#xfe0e Lavado Exterior<br>&#x2705;&#xfe0e Lavado de motor<br>&#x2705;&#xfe0e Lavado Interior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 0';
               break;
               case 4: p . innerHTML = '&#x2705;&#xfe0e Lavado Exterior<br>&#x2705;&#xfe0e Lavado de motor<br>&#x2705;&#xfe0e Lavado Interior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 100.000';
               break;
               case 5: p . innerHTML = '&#x2705;&#xfe0e Lavado Exterior<br>&#x2705;&#xfe0e Lavado de motor<br>&#x2705;&#xfe0e Lavado Interior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 120.000';
               break;
           }
       }
       else{
           if(n==2){//Servicio 2
           switch(cat){
               case 1: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 40.000';
               break;
               case 2: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 50.000';
               break;
               case 3: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 0';
               break;
               case 4: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 60.000';
               break;
               case 5: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 70.000';
               break;
           }
           }
           else{
               if(n==3){//Servicio 3
             switch(cat){
               case 1: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<hr><br> GS. 30.000';
               break;
               case 2: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<hr><br> GS. 40.000';
               break;
               case 3: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<hr><br> GS. 20.000';
               break;
               case 4: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<hr><br> GS. 50.000';
               break;
               case 5: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<hr><br> GS. 60.000';
               break;
             }    
               }
           
             else{
               if(n==4){
               switch(cat){
               case 1: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<br>&#x2705;&#xfe0e Lavado interior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 50.000';
               break;
               case 2: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<br>&#x2705;&#xfe0e Lavado interior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 60.000';
               break;
               case 3: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<br>&#x2705;&#xfe0e Lavado interior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 0';
               break;
               case 4: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<br>&#x2705;&#xfe0e Lavado interior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 70.000';
               break;
               case 5: p . innerHTML = '&#x2705;&#xfe0e Lavado exterior<br>&#x2705;&#xfe0e Lavado interior<br>&#x2705;&#xfe0e Encerado<hr><br> GS. 80.000';
               break;
               }        
                   
               }
               else{
                   if(n==5){
                    switch(cat){
                      case 1: p . innerHTML = '&#x2705;&#xfe0e Lavado interior<hr><br> GS. 20.000';
                      break;
                      case 2: p . innerHTML = '&#x2705;&#xfe0e Lavado interior<hr><br> GS. 30.000';
                      break;
                      case 3: p . innerHTML = '&#x2705;&#xfe0e Lavado interior<hr><br> GS. 0';
                      break;
                      case 4: p . innerHTML = '&#x2705;&#xfe0e Lavado interior<hr><br> GS. 30.000';
                      break;
                      case 5: p . innerHTML = '&#x2705;&#xfe0e Lavado interior<hr><br> GS. 50.000';
                      break;
                    }
                   }
                   else{
                       if(n==0){
                         
                        p . innerHTML = '-<br>-<br>ESTE VEHICULO NO SE INCLUIRA EN SU PEDIDO<br>-<br>-';
                       }                    
                   }
               }
             }
           }
       }

       function seleccion(){
           alert("¿DESEA REALIZAR ESTE PEDIDO?")
       }
       
    }
   
   

</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/estilos.css')}}">
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
        <p id="price">TOTAL GS. 100.000</p><br>
        <form action="perfil/pedido" method="POST">
        @csrf
        <?php

use Symfony\Component\Console\Input\Input;

use function PHPSTORM_META\type;

foreach($vehiculo as $v){ ?>    
    
         <article class="article">
                <section class="tipo_vehiculo">
                    
                    <?php echo "id: $v->id_usuario"?><br>
                    <?php echo "Marca: $v->marca "?><br>
                    <?php echo "Modelo: $v->modelo "?><br>
                    <?php echo "Chapa: $v->chapa "?><br>
                
               
                </section>
                <section class="servicio">
                    <div class="radio-group">
                       <input type="hidden" name="id" value="<?php echo $v->id_usuario ?>">
                        <label class="radio">
                          <input type="radio" name="<?php echo $v->id ?>" value="1" onclick="servicio(<?php echo $v->id; ?>,1,<?php echo $v->id_categoria ?>)">
                          FULL
                        </label>
                        <label  class="radio">
                          <input type="radio" name="<?php echo $v->id ?>" value="2" onclick="servicio(<?php echo $v->id; ?>,2,<?php echo $v->id_categoria ?>)">
                          EXTERIOR+
                        </label>
                        <label class="radio">
                          <input type="radio" name="<?php echo $v->id ?>" value="3" onclick="servicio(<?php echo $v->id; ?>,3,<?php echo $v->id_categoria ?>)">
                          EXTERIOR Eco
                        </label>
                        <label class="radio">
                          <input type="radio" name="<?php echo $v->id ?>" value="4" onclick="servicio(<?php echo $v->id; ?>,4,<?php echo $v->id_categoria ?>)">
                          SEMI+
                        </label>
                        <label class="radio">
                          <input type="radio" name="<?php echo $v->id ?>" value="5" onclick="servicio(<?php echo $v->id; ?>,5,<?php echo $v->id_categoria ?>)">
                          INTERIOR
                        </label>
                        <label class="radio">
                          <input type="radio" name="<?php echo $v->id ?>" value="0" onclick="servicio(<?php echo $v->id; ?>,0,<?php echo $v->id_categoria ?>)" checked>
                          EXCLUIR
                        </label>
                       
                        
                       
                        
                        <hr id="linea_servicios">
                    </div>
                    <p id="<?php echo $v->id ?>">-<br>-<br>Seleccionar Servicio<br>- </p> 
                    
                </section>
            </article>
        <?php } ?>
           
           <input id="realizar_pedido" type="submit" value="Realizar Pedido" onclick="seleccion()">
        </form>
           <br>
           
           
           <button class="button" type="button" >Agregar Vehiculo</button>
           

         
    
    </div>
    <div id="footer">
           pie de pagina<br>
           texto de preueba<br>
           texto de preueba<br>
           Grupo 2 &#xa9;
           </div>
</body>
</html>




