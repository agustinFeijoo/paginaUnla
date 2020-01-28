
function borrarContacto( idCuenta, idContacto){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            tabla.innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","../handler/mediosDeComunicacion.php?idCuenta="+idCuenta+"&idContacto="+idContacto+"&borrar="+1);
    xmlhttp.send();
}
    function mostrarMedios(){
        var xmlhttp;
        
        if(window.XMLHttpRequest){
            xmlhttp=new XMLHttpRequest();
        }else{
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
                tabla.innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","../handler/mediosDeComunicacion.php?mostrar=1",true);
        xmlhttp.send();

    }


function insertarContacto(){
    
    var medio=document.getElementById("medio").value;
    var identificacion=document.getElementById("identificacion").value;
    var formulario=document.getElementById("formulario");
    formulario.reset();
    if(medio!=="" && identificacion !==""){
    var xmlhttp;
    var tabla=document.getElementById("tabla");
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            tabla.innerHTML=xmlhttp.responseText;
        }
    }
    
    xmlhttp.open("GET","../handler/mediosDeComunicacion.php?medio="+medio+"&identificacion="+identificacion);
    xmlhttp.send();

    
}
}
 function mostrarMisVentas(){
     var xmlhttp;
     
     var cajaVentas=document.getElementById("cajaVentas");
     if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
     }else{
         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
     }
     xmlhttp.onreadystatechange=function(){
         if(xmlhttp.readyState==4 && xmlhttp.status==200){
         cajaVentas.innerHTML=xmlhttp.responseText;
         }
     }
     xmlhttp.open("GET","../handler/misVentas.php");
     xmlhttp.send();
 }