<?php

if($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Reportes de Lecturas

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Reportes de Lecturas</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">


      <div class="box-body">

        <div class="row">

          <div class="col-xs-6">

            <?php

            include "reportes/grafico-ventas.php";

            ?>

          </div>

           <div class="col-md-6 col-xs-6">

            <?php

            include "reportes/compradores.php";

            ?>

           </div>

            <div class="col-md-6 col-xs-6">

              <?php

              include "reportes/grafico-ventas3.php";

              ?>

           </div>

           <div class="col-md-6 col-xs-6">

            <?php

            include "reportes/grafico-ventas2.php";

            ?>

           </div>

        </div>

      </div>

    </div>

  </section>

 </div>
