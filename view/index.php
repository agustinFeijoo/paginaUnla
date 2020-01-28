<!DOCTYPE html>
<?php

//CREO LA TABLA
try{
$conexion=new PDO('mysql:host=localhost;dbname=paginaunlaPhp','root','root');
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$conexion->exec("SET CHARACTER SET UTF8");
/*
$sql="CREATE TABLE IF NOT EXISTS cuenta(id INT AUTO_INCREMENT,usuario VARCHAR(30),contrasena VARCHAR(45),PRIMARY KEY(id))";
$sql1="CREATE TABLE IF NOT EXISTS contacto(id INT,medio VARCHAR(30),identificacion VARCHAR(50),idCuenta int,PRIMARY KEY(id,idCuenta),FOREIGN KEY(idCuenta) REFERENCES cuenta(id))";
$conexion->exec($sql);
$conexion->exec($sql1);
*/
}catch(Exception $e){
  echo "Error".$e->getMessage();
}
//CREATE TABLE `paginaunla`.`venta` ( `idVenta` INT(9) NOT NULL , `titulo` VARCHAR(45) NOT NULL , `comentario` TEXT NULL , `imagen` VARCHAR(45) NOT NULL , `fecha` DATETIME NOT NULL , `idCuenta` INT(9) NOT NULL ) ENGINE = InnoDB;
//ALTER TABLE `venta` ADD FOREIGN KEY (`idCuenta`) REFERENCES `cuenta`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
//ALTER TABLE `venta` ADD PRIMARY KEY( `idVenta`, `idCuenta`);
//aclarar ONCASCADE y FK con cuenta
?>

   <head>
     <title> Sistemas UNLa</title>
     <meta charset="utf-8"/>
     <link rel="shortcut icon" type="image/x-icon" href="../imagenes/unla.png">
     <link href="../css/estilo.css" rel="stylesheet">
     <link href="../css/menu.css" rel="stylesheet">
     <link href="../Bootstrap/css/bootstrap.css" rel="stylesheet">

     <script src="../javaScript/index.js">
    </script>
   </head>
   <body class="fondounla">







     <ul class="navegacion">
      
       <li class="item-l">Iniciar sesión</a>
         <ul>
           <li onclick="toggleOverlay()">>  Alumno</a></li>
           <li> Administrador</a></li>
         </ul>
       </li>
       <li class="item-r"><a href="compraVenta.php">Compra-venta de libros y otros materiales</a></li>
     </ul>
     <br>
     <header>
       <h1>Sistemas UNLa: Apuntes,parciales y otros complementos</h1>
     </header>

        <p>Una guia para complementar la carrera de <strong> Licenciatura en sistemas</strong>,acompañar a aquellos que</br> quieren adelantarse/introducirse en las materias que se desarrollan en la facultad.</br>La pagina se actualizara de forma cooperativa y seran suspendidos aquellos aportes que no aporten a la disciplina.</br>
          Esperamos que disfruten la pagina como nosotros al hacerla!
        <br>
      <table>
        <tr>
          <td class="primerCuatri">&nbsp;&nbsp;&nbsp;&nbsp;</td> <td>Primer Cuatrimestre&nbsp;</td>
          <td class="segCuatri">&nbsp;&nbsp;&nbsp;&nbsp;</td> <td>Segundo Cuatrimestre&nbsp;</td>
          <td class="anual">&nbsp;&nbsp;&nbsp;&nbsp;</td>  <td>Anual</td>
        </tr>
      </table>
     
      <div class="bloqueHorizontal">

           
           <table class="tabla1">
             <tr class="primerCuatri">
               <th>Nro</th>
               <th>Año</th>
               <th>Materia</th>
               <th>Correlativas<th>
              </tr>
              <tr class="primerCuatri">
                <td>1</td>
                <td class="anio" rowspan="7"> 1ero </td>
                <td>Matemática 1</td>
                <td>---</td>
              </tr>
              <tr class="primerCuatri">
                <td>2</td>
                <td> Organizacion de computadoras</td>
                <td>---</td>
              </tr>
              <tr class="primerCuatri">
                <td>3</td>
                <td>Expresión de problemas y algoritmos</td>
                <td>---</td>
              </tr>
              <tr class="anual">
                <td>4</td>
                <td>Programacion de computadoras</td>
                <td>---</td>
              </tr>
              <tr class="segCuatri">
                <td>5</td>
                <td>Matemática 2</td>
                <td>1</td>
              </tr>
              <tr class="segCuatri">
                <td>6</td>
                <td>Arquitectura de computadoras</td>
                <td>2</td>
              </tr>
              <tr class="segCuatri">
                <td>7</td>
                <td>Introduccion al pensamiento científico</td>
                <td>---</td>
              </tr>

              <tr class="primerCuatri">
                <td>8</td>
                <td rowspan="7"> 2do </td>
                <td>Ingenieria de software 1</td>
                <td>4</td>
              </tr>
              <tr class="primerCuatri">
                <td>9</td>
                <td>Algoritmos y estructuras de datos</td>
                <td>1-4-5</td>
              </tr>
              <tr class=primerCuatri>
                <td>10</td>
                <td>Matemática 3</td>
                <td>4</td>
              </tr>
              <tr class="anual">
                <td>11</td>
                <td>Introducción a bases de datos</td>
                <td>4</td>
              </tr>
              <tr class="segCuatri">
                <td>12</td>
                <td>Orientación a objetos 1</td>
                <td>4</td>
              </tr>
              <tr class="segCuatri">
                <td>13</td>
                <td>Seminario de lenguajes</td>
                <td>4</td>
              </tr>
              <tr class="segCuatri">
                <td>14</td>
                <td>Introduccion a sistemas operativos</td>
                <td>2-4-6</td>
              </tr>
              <tr class="primerCuatri">
                <td>15</td>
                <td rowspan="8"> 3ero </td>
                <td>Programación concurrente</td>
                <td>1-2-6-11</td>
              </tr>
              <tr class="primerCuatri">
                <td>16</td>
                <td>Ingenieria de software 2</td>
                <td>4-8</td>
              </tr>
              <tr class="primerCuatri">
                <td>17</td>
                <td>Orientación a objetos 2</td>
                <td>4-12</td>
              </tr>
              <tr class="primerCuatri">
                <td>18</td>
                <td>Conceptos y paradigmas de los lenguajes de programación</td>
                <td>1-4-5-9-13</td>
              </tr>
              <tr class="segCuatri">
                <td>19</td>
                <td>Sistemas y organizaciones</td>
                <td>4-8-11</td>
              </tr>
              <tr class="segCuatri">
                <td>20</td>
                <td>Bases de datos 1</td>
                <td></td>
              </tr>
              <tr class="segCuatri">
                <td>21</td>
                <td>Proyecto software</td>
                <td>1-4-5-8-9-11</td>
              </tr>
              <tr class="segCuatri">
                <td>22</td>
                <td>Redes y comunicaciones</td>
                <td>1-2-4-5-6-14</td>
              </tr>
              <tr class="primerCuatri">
                <td>23</td>
                <td rowspan="8"> 4to </td>
                <td>Ingenieria de software 3</td>
                <td>1-4-5-8-10-11-16-19</td>
              </tr>
              <tr class="primerCuatri">
                <td>24</td>
                <td>Bases de datos 2</td>
                <td>4-11-20</td>
              </tr>
              <tr class="primerCuatri">
                <td>25</td>
                <td>Sistemas operativos</td>
                <td>1-2-4-5-6-14-22</td>
              </tr>
              <tr class="primerCuatri">
                <td>26</td>
                <td>Optativa área ciencias básicas</td>
                <td>Cursar hasta 3er año</td>
              </tr>
              <tr class="segCuatri">
                <td>27</td>
                <td>Fundamentos de la teoría de la computación</td>
                <td>1-4-5-9-10-13-18</td>
              </tr>
              <tr class="segCuatri">
                <td>28</td>
                <td>Desarrollo de software en sistemas distribuidos</td>
                <td>1-2-4-5-6-11-14-15-20-22</td>
              </tr>
              <tr class="segCuatri">
                <td>29</td>
                <td>Optaviva área Arquitectura,Sistemas Operativos y Redes</td>
                <td>Cursar hasta 3er año</td>
              </tr>
              <tr class="segCuatri">
                <td>30</td>
                <td>Optativa Área Algoritmos y Lenguajes</td>
                <td>Cursar hasta 3er año</td>
              </tr>
              <tr class="primerCuatri">
                <td>31</td>
                <td rowspan="5"> 5to </td>
                <td>Política y gestión de la ciencia</td>
                <td>Cursar hasta 3er año</td>
              </tr>
              <tr class="primerCuatri">
                <td>32</td>
                <td>Aspectos legales y profesionales de la informática</td>
                <td>1-4-5-8-9-11-21</td>
              </tr>
              <tr class="anual">
                <td>33</td>
                <td>Trabajo final</td>
                <td>Todas las materias</td>
              </tr>
              <tr class="segCuatri">
                <td>34</td>
                <td>Optaviva Área de ingenieria de software y bases de datos</td>
                <td>Cursar hasta 3er año</td>
              </tr>
              <tr class="segCuatri">
                <td>35</td>
                <td>Nuevos escenarios</td>
                <td>Cursar hasta 3er año</td>
              </tr>

            </table>
              
           <!--   
              <tr class="primerCuatri">
                <td>1</td>
                <td class="anio" rowspan="7"> 1ero </td>
                <td>Matemática 1</td>
                <td>---</td>
              </tr>
-->
    
      <section class="bloque1">
       <h3> Escoje tu materia y esperamos poder proveerte de:</h3>
        <div class="caja1">Fundamentos</div>
        <div class="caja2">Libros</div>
        <div class="caja3">Apuntes</div>
        <div class="caja4">Resumenes</div>
        <div class="caja5">Tutoriales</div>
        <div class="caja6">Comentarios y criticas</div>
      </section>
    </div>


    


<div id="overlay" style='
    display: none;
    z-index: 1;
    background:rgba(0, 0, 0, 0.596);
    position:fixed;
    width:100%;
    height:100%;
    top:0px;
    left:0px;
    text-align:center;'>
    
  <div id ="cartelSesion" class="border col-5  h-50 " style="background:-webkit-linear-gradient(bottom,rgb(132, 139, 68),rgb(125, 221, 176));
    display:none;
    z-index:2;
    margin:auto;
    margin-top:10%;
    ">
    <div class="card-header ">
      <nav class="navbar-brand font-weight-bold"> Ingresa </nav>
      <img src="../imagenes/botonCerrar.png" style="width:4%;height:4%;float:right ;" alt="cerrar"onclick="toggleOverlay()">
      <!-- Estaria bueno que me saque lo de usuario Incorrecto -->
    </div>


    <form action="../handler/ingresarBusqueda.php" method="POST" class="col-12 card-body">

         <div class="form-group">
        <input type="text" id="usuario" required="required" name="usuario" class="form-control" placeholder="Nombre Usuario" maxlength="30" minlenght="10">
        </div>
        <br>
        <div class="form-group">
        <input type="password" name="contrasena" required="required" class="form-control" id="contrasena" placeholder="constraseña">
        </div>
        <input type="submit" id="crear" class="button  btn-block bg-primary" value="Iniciar sesión" >
    </form>
  <!-- SI ME DEVUELVE UN FALSE QUIERE DECIR QUE SE CONFUNDIÓ CON LA CONTRASEÑA -->

<?php
  if(isset($_GET['existe'])){
   echo "<script> toggleOverlay()</script>";
    echo '<p class="" style="background:rgb(0,0,0);color:rgb(255,0,0);">Contraseña/usuario incorrecto</p>';
    }
    ?>

  </div>
  <a href="creacionCuenta.php">Todavía no tenes una cuenta?</a>
</div>
    


    



  


  

</body>