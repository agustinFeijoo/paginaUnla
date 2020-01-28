<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include("../model/ObjetoBlog.php");
    include("../model/ManejoObjetos.php");
    try{
        $miconexion=new PDO('mysql:host=localhost;dbname=blog','');
        $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        die("Error".$e->getMessage());
    }
        if($_FILES['imagen']['error']){
            switch($_FILES['imagen']['error']){
                case 1: 
                echo 'El archivo excede el límite del permitido por el servidor (param upload_max_size de php.ini';
                break;
                case 2: echo "El archivo supera el tamaño permitido por el servidor (param upload_max_size de php.ini)";
                case 3:echo "Error de interrupción durante subida";break;
                case 4: echo "El tamaño de ¡l archivo es o nulo o no se ha enviado";break;
            }
            }else{
                echo "No hay error en la tranferencia <br/>";            
            }
            if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'])==UPLOAD_ERR_OK)){
                $destinoRuta='../imagenes/';
                move_uploaded_file($_FILES['imagen']['tmp_name'],$destinoRuta.$_FILES['imagen']['name']);
               // echo "El archivo ".$_FILES['imagen']['name']."Se ha cargado en el directorio imagenes";
            }else{
                "El archivo no se ha copiado en el directorio imagenes";
            }
        
        $manejoObjetos=new ManejoObjetos($miconexion);
        $blog=new ObjetoBlog();
        $blog->setTitulo(htmlentities(addslashes($_POST["campoTitulo"]),ENT_QUOTES));
        $blog->setFecha(date("Y-m-d H:i:s"));
        $blog->setComentario(htmlentities(addslashes($_POST["areaComentarios"]),ENT_QUOTES));
        $blog->setImagen($_FILES["imagen"]["name"]);
        $manejoObjetos->insertaventa($blog);
        echo"<br/> Entrada de blog agregada con exito </br>";
    


?>
</body>
</html>