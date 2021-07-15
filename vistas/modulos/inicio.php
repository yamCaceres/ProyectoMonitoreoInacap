
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<div class="content-wrapper">

  <section class="content-header">


  </section>

  <section class="content">

    <div class="row">
      <?php

  include "inicio/cajas-superiores.php";

    ?>


    </div>

     <div class="row">

        <div class="col-lg-12">

          <?php
           include "reportes/grafico-ambiente.php";
          ?>

        </div>


        <div class="col-lg-6">

          <?php

           include "reportes/grafico-ambiente2.php";

          ?>

        </div>

         <div class="col-lg-6">

          <?php

           include "reportes/grafico-ambiente3.php";

          ?>

        </div>

         <div class="col-lg-12">

          <?php

          if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor"){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>

             </div>

             </div>';

          }

          ?>

         </div>

     </div>

  </section>


<section id="seccionRecargar">

  <?php include 'alertas.php'; ?>

</section>



  <script type="text/javascript">

    $(document).ready(function(){
        setInterval(
          function(){
              $('#seccionRecargar').load('alertas.php');
          },10000
        );
    });

  </script>



</div>
