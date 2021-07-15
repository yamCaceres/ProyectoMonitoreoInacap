<?php

require_once "modelos/alertas.modelo.php";

require_once "controladores/alertas.controlador.php";
?>




<div class="content-wrapper"style="display: none">
  <section class="content-header">


  </section>

  <section class="content">

    <div class="box">


      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

          <thead>

            <tr>
              <th>Nombre</th>
              <th>Tipo Alerta</th>
              <th>Ajuste</th>
              <th>Valor</th>
              <th>Fecha</th>

              <th>Acciones</tr>
            </tr>

          </thead>

          <tbody>
            <?php
            $item = null;
            $valor = null;

            $respuesta = ControladorAlertas::ctrMostrarAlertas($item, $valor);

            foreach ($respuesta as $key => $value) {

              echo '<tr>
              <td>'.$value["nombre"].'</td>
              <td>'.$value["tipoAlerta"].'</td>
              <td>'.$value["ajuste"].'</td>
              <td>'.$value["valor"].'</td>
              <td>'.$value["fecha"].'</td>
              <td>'.$value["acciones"].'</td>';

              if($value["acciones"] == null){
                echo '<script>

                swal({
                  type: "warning",
                  title: "¡Alerta en Maquina '.$value["nombre"].'!",
                  text: "se detecto una Temperatura de '.$value["valor"].' - Set Point: '.$value["ajuste"].'. Favor revisar.",
                  showConfirmButton: true,
                  confirmButtonText: "Cerrar"

                }).then(function(result){

                  if(result.value){

                    window.location = "listadoAlertas";

                  }

                });


                </script>';
              }


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
