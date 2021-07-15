<div class="content-wrapper">
  <section class="content-header">

    <h1>

      Temperaturas

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">lecturas Temperaturas</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

          <thead>

            <tr>
              <th>Nombre</th>
              <th>Set Point</th>
              <th>Valor</th>
              <th>Fecha</th>
              <th>Hora</tr>
            </tr>

          </thead>

          <tbody>
            <?php
            $item = null;
            $valor = null;

            $respuesta = ControladorTemperatura::ctrMostrarTemperatura($item, $valor);

            foreach ($respuesta as $key => $value) {

              echo '<tr>
              <td>'.$value["nombre"].'</td>
              <td>'.$value["ajuste"].'</td>
              <td>'.$value["valor"].'</td>
              <td>'.$value["fecha"].'</td>
              <td>'.$value["hora"].'</td>
              </tr>';

              }

              ?>

            </tbody>

        </table>



       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<script>
function btnPDF(){

  window.open("extensiones/tcpdf/pdf/reporteRefrigeracion.php/","_blank");
}
</script>
