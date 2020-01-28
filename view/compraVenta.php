<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <style>
    .miClase{
        color:white;
        cursor:pointer;
    }
    button{
        padding: 15px;
        margin-left:42%;
        font-size:14px;
        cursor:pointer;
        }
    div#overlay{
        display: none;
        z-index: 1;
        background:rgb(0,0,0);
        position:fixed;
        width:100%;
        height:100%;
        top:0px;
        left:0px;
        text-align:center;
    }
    div#wrapper{
        position:absolute;
        top:40px;
    }
    #info{
        padding:20px;
    }
    div#informacionUsuario{
        display:none;
        position:relative;
        z-index:2;
        margin: 100px auto 0px auto;
        width:400px;
        height: 60%;
        background:rgb(255,255,255);
        color:rgb(0,0,0);
        border:4px solid rgb(216, 110, 189);
        font-size:18px;
        padding:15px;
    }

    .fondo{
        background:-webkit-radial-gradient(bottom,rgb(121, 19, 19),rgba(125, 221, 176,0.4));
        height:97vh;
        width:98%;
        display:inline-block;
    }
    body{
        background: rgb(121, 19, 19);
    }

    </style>
</head>
<body onload="mostrarUsuarios()">
    <nav class="navbar-brand bg-warning col-12 ">
    <a href="index.php" class="small"> Volver a inicio </a>
    <h1 class="text-center">Sector compra-venta</h1>
    </nav>
    
<div class="fondo">

        <div id="wrapper">
                <span class="m-5 d-block"><br/>Buscar por vendedor <input type="text" onkeyup="buscarUsuario(this.value)" placeholder="Ingrese usuario a buscar"> </span> 
                <div class="d-block m-5" id="mostrar"></div>
        </div>

        <div id="overlay"></div>

    <div id="informacionUsuario">
        
        <p id="info"></p>
        <button class="btn bg-warning" onclick="toggleOverlay(this)">Cerrar</button>
    </div>

</div>   

    <script>
     var resultado=document.getElementById("mostrar");

     function mostrarUsuarios(){
         var xmlhttp;
         if(window.XMLHttpRequest){
            xmlhttp=new XMLHttpRequest();
        }else{
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
         xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
                resultado.innerHTML=xmlhttp.responseText;
                
            }
         }
         xmlhttp.open("GET","../handler/compraVenta.php?usuario=",true);
         xmlhttp.send();
     }

     function buscarUsuario(usuario){
        var xmlhttp;
        
        if(window.XMLHttpRequest){
            xmlhttp=new XMLHttpRequest();
        }else{
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

         xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
                resultado.innerHTML=xmlhttp.responseText;
            }
         }
         xmlhttp.open("GET","../handler/compraVenta.php?usuario="+usuario,true);
         xmlhttp.send();
     }

     function toggleOverlay(elemento){//bien puede ser "cerrar" o el idCuenta
        var overlay = document.getElementById("overlay");
        var informacionUsuario=document.getElementById("informacionUsuario");
        var info=document.getElementById("info");
        overlay.style.opacity=0.6;
        if(overlay.style.display=="block"){
            overlay.style.display="none";
            informacionUsuario.style.display="none";
        }else{
            overlay.style.display="block";
            informacionUsuario.style.display="block"
            var idCuenta=elemento;
            var idMedio=1;
            //VUELTA A AJAX PARA MOSTRAR LOS DATOS DE USUARIO
            var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }else{
                xmlhttp=new ActiveXObject("MICROSOFT.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    info.innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","../handler/compraVentaMostrarUsuario.php?elemento="+elemento,true);
            xmlhttp.send();
        }
     }
      
        
     



    </script>

</body>
</html>












<!--


        .fondo{
        background:-webkit-radial-gradient(bottom,rgb(121, 19, 19),rgba(125, 221, 176,0.4));
        height:97vh;
        width:98%;
        display:inline-block;
    }
    body{
        background: rgb(121, 19, 19);
    }
-->