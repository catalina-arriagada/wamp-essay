<?php

include_once 'conexion.php';//traer conexion de bd al programa php

//PHP traer consulta de MySql
$sql_trae = 'select * from colores'; //traer todos (*) campos q encuentr de tabla colores 

$enviar = $pdo->prepare($sql_trae);
$enviar->execute();

$resultado = $enviar->fetchAll(); //arreglode losresultados de bd. parsiar y colocar en variable resultado

//var_dump($resultado); ///mostrar base de d

//Agregar un nuevo registro
//pregunta:
if($_POST){
  //echo $_POST['color']; //mostrar loq escribi en el input color
  
  $color = $_POST['color'];
  $descripcion = $_POST['descripcion'];

  //$color = null;
  //$descripcion=null;
  //$color = $_POST['color'];//toma lo q encontrast en post color y agregalo a color.traigo valor html y selopaso a php
  //$descripcion = $_POST['descripcion']; //si uso post en vardescripcion insertala en descropcion php. se comunica php con html(colory descp esta en html mas abajo)
  //insertar info:
  
  //isset() devuelve false porque $var no ha sido definida
  if (is_null($color) or empty ($color)) {

  } else{ 
  
  $sql_agrega = 'INSERT INTO colores (color,descripcion) VALUES (?,?)'; //sentencia sql
  $agregar  = $pdo->prepare($sql_agrega);
  $agregar->execute(array($color,$descripcion));
  //limpiar variables:
  $color = NULL;
  $descripcion = NULL;
  
  }
  header('location:index.php');
}
if($_GET){
  $id = $_GET['id'];
  $sql_unico = 'SELECT * FROM colores WHERE id=?'; //? proteje pa k no inyecten codigo
  $unico = $pdo->prepare($sql_unico);
  $unico->execute(array($id));//me traigo solo el registro del numero de id seleccionado
  $resultado_unico = $unico->fetch(); //fetch solo un rgistro.fetchall todos los registros

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> <!--referencia a una libreria de bootstrap-->
   
   <!-- Font awesome icons: -->
    <script src="https://kit.fontawesome.com/5106b1386b.js" crossorigin="anonymous"></script>
   
    <title>Colores Bootstrap</title>
  </head>
  <body>
    <div class ="container mt-5">
         <div class ="row">
            <div class ="col-md-6">

                <?php foreach($resultado as $dato): ?>
                    <div 
                    class = "alert alert-<?php echo $dato['color']?> text = uppercase" role = "alert">
                        <!--$dato: 1 linea. $resultado: me pasa todas las lineas-->
                        <?php echo $dato ['color'] ?>
                        <?php echo $dato ['descripcion'] ?>

                        <a href="index.php?id=<?php echo $dato['id']?>" class="float-right">
                           <i class="fas fa-pencil-alt"></i>
                        </a>

                        <a href="eliminar.php?id=<?php echo $dato['id'] ?>" class="flot-right ml-3"> <!--?: a continuacion desplegare parametros: id=.../ml: distancia css-->
                        <i class="fas fa-trash-alt"></i>
                        </a>                 

                    </div>
                <?php endforeach?>
    
           </div>

          <div class="col-md-6"><!--toma la mitad de la pantalla-->
              
              <?php if(!$_GET): //sino ! - : donde encuentre endif termina el if ?> 
                 
                  <h2>AGREGAR NUEVO REGISTRO</h2>
                  <form method="POST"> <!--metodo post o get. post es mas seguro pa pags web.(pabancos)el get:datos en url perodeja a webs vulnerables-->
                    <input type="text" class="form-control" name="color">
                    <input type="text" class="form-control mt-3" name="descripcion">
                    <button class="btn btn-primary mt-3"> Agregar </button><!--color:primary de bootstrap-->

                  </form>

              <?php endif ?>

              
              <?php if($_GET): ?> 
                 
                 <h2>EDITAR REGISTRO</h2>
                 <form method="GET" action="editar.php"> 
                   <input type="text" class="form-control" name="color" value="<?php echo $resultado_unico['color']?>">
                   <input type="text" class="form-control mt-3" name="descripcion" value = "<?php echo $resultado_unico['descripcion']?>">
                   <input type= "hidden" name="id" value= "<?php echo $resultado_unico['id']?>">
                   <button class="btn btn-primary mt-3"> Agregar </button>

                 </form>

              <?php endif ?>

          </div> 
         </div>   
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>



