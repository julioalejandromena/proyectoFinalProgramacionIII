<?php 

require "head.php"; 
include "navBar.php";

?>


<div class="container bg-info">
    <div class="row">
        <?php 

            $entradas = file("blog.txt");
            $totalDeEntradas = count($entradas);
            $entradasPorPagina = 5;
            $totalDePaginas = ceil( $totalDeEntradas / $entradasPorPagina );
  
            $paginaActual = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;

              if($paginaActual < 1)
              {
                $paginaActual = 1;
              }
              else if($paginaActual > $totalDePaginas)
              {
                $paginaActual = $totalDePaginas;
              }

              $primeraEntradaAMostrar = ( $paginaActual - 1 ) * $entradasPorPagina;
              $ultimaEntradaAMostrar = $primeraEntradaAMostrar + $entradasPorPagina;

              if($ultimaEntradaAMostrar > $totalDeEntradas)
              {
                $ultimaEntradaAMostrar = $totalDeEntradas;
              }

              $paginaSiguiente = $paginaActual < $totalDePaginas ?  $paginaActual + 1 : $totalDePaginas;
              $paginaAnterior =  $paginaActual > 1 ? $paginaActual - 1 : 1;

            $iniciarPaginacion = !isset($_GET["pagina"]) ? "" : $_GET["pagina"];
            for($i = $primeraEntradaAMostrar; $i < $ultimaEntradaAMostrar; $i++)
            {
              $entradaActual = explode("||", $entradas[$i]);
              $titulo = $entradaActual[0];
              $descripcion = $entradaActual[1];
              $fecha = $entradaActual[2];
              echo  <<<CARD

        <div class="col-12">
            <div class="card my-2 text-center">
              <div class="card-head">
                <h3>$titulo</h3>
              </div>
              <div class="card-body">
                <p><em>$fecha</em></p>
                $descripcion
              </div>
            </div>
          </div>
CARD;
            } 
?>         
    </div>
</div>

<div class="container mt-2">
<nav aria-label="Page navigation example text-center">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="blog.php?pagina=<?php echo $paginaAnterior; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php
    for($contador = 1; $contador <= $totalDePaginas; $contador++)
    {
      $activo = $paginaActual == $contador ? "active" : "";
      echo<<<PAGINACION
        <li class="page-item $activo"><a class="page-link" href="blog.php?pagina=$contador">$contador</a></li>
PAGINACION;
    }
    ?>
        <li class="page-item">
          <a class="page-link" href="blog.php?pagina=<?php echo $paginaSiguiente; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>

<?php include "footer.php"; ?>