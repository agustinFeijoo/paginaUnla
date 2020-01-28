function creacionCuenta(){
    var xmlhttp;
    var overlay=document.getElementById("overlay");
      if(window.XMLHttpRequest){
          xmlhttp=new XMLHttpRequest();
      }else{
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function(){
          if(xmlhttp.readyState==4 && xmlhttp.status==200){
              overlay.innerHTML=xmlhttp.responseText;
          }
      }
      xmlhttp.open("GET","../handler/mediosDeComunicacion.php?mostrar=1",true);
      xmlhttp.send();
  }



  function toggleOverlay(){
      var overlay = document.getElementById("overlay");
      var cartelSesion=document.getElementById("cartelSesion");
      if(overlay.style.display=="block"){
          overlay.style.display="none";
          cartelSesion.style.display="none";
      }else{
          overlay.style.display="block";
          cartelSesion.style.display="block";}
  }

    function iniciarSesion(){
          //VUELTA A AJAX PARA MOSTRAR LOS DATOS DE USUARIO
          var xmlhttp;
          if(window.XMLHttpRequest){
              xmlhttp=new XMLHttpRequest();
          }else{
              xmlhttp=new ActiveXObject("MICROSOFT.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function(){
              if(xmlhttp.readyState==4 && xmlhttp.status==200){
                cartelSesion.innerHTML=xmlhttp.responseText;
              }
          }
          xmlhttp.open("GET","ingresar.php",true);
        //  xmlhttp.send();
      }
  
    