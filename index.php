<?php require "head.php"; ?>
<?php 

  include "navBar.php"; 
  $datos = file("biografia.txt");
  
  ?> 

<div class="container mt-2 bg-info">
  <div class="row">
    <div class="col-3">
      <div class="card m-auto my-5" style="width: 18rem;">
          <img src="img/Estudiante.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo  $datos[0];?></h5>
            <?php for($i = 1; $i < count($datos); $i++) {?>
                <p class="card-text"><?php echo $datos[$i]; ?></p>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="col-3 bg-danger text-white my-5">
        <div>
          <h3>Detalles del Navegador del Usuario</h3>
          <?php 
            echo '<h5> ' . $_SERVER["HTTP_USER_AGENT"] . '</h5>';
          ?>
        </div>
        <div>
          <?php

          require "biblioteca_proyecto_final.php";

          // aqui instancio el metodo para obtener la informacion del navegador
          $ua = getBrowser();
          $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . "\n on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
          //print_r($yourbrowser);


          ?>
            <p><?php echo $yourbrowser; ?></p>
        </div>
      </div>
      <div class="col-6 bg-info">
        <?php

          $contenidoDelBlog = file("blog.txt");

          for($x = 3; $x > 0; $x--) { 
            if($x <= 0)
            {
            ?>
            <h3>No hay Blog para mostrar</h3>
            <?php }else{ 
             $contenidoBlog = explode("||", $contenidoDelBlog[$x]);
             $titulo = $contenidoBlog[0]; 
             $descripcion = $contenidoBlog[1]; 
             $fecha = $contenidoBlog[2]; 
            ?>
              
              <div class="card my-5">
                <div class="card-head text-center">
                <h2><?php echo $titulo; ?></h2>
                </div>
                <div class="card-body text-center">
                  <p><?php echo $descripcion; ?></p>
                  <p><em><?php echo $fecha; ?></em></p>
                </div>
              </div>

          <?php }}?>
      </div>
  </div>

</div>

<?php include "footer.php"; ?>