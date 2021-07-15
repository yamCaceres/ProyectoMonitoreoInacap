<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Listado de Alertas

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Listado de Alertas</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Fecha</th>
           <th>Hora</th>
           <th>set Point</th>
           <th>Valor</th>
           <th>Acciones</th>
           <th>Agregar Accion</th>

         </tr>

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;

        $respuesta = ControladorAlertas::ctrMostrarAlertas($item, $valor);

        foreach ($respuesta as $key => $value){
          echo ' <tr>
                  <td>'.$value["id"].'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["fecha"].'</td>
                  <td>'.$value["hora"].'</td>
                  <td>'.$value["ajuste"].'</td>
                  <td>'.$value["valor"].'</td>
                  <td>'.$value["acciones"].'</td>';

                  if($value["acciones"]== null){
                    echo '
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-warning btnAgregarAccion" idAlerta="'.$value["id"].'" data-toggle="modal" data-target="#modalAgregarAccion"><i class="fa fa-pencil"></i></button>
                      </div>
                    </td>
                  </tr>
                    ';
                  }else{
                    echo '
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-secondary"><i class="fa fa-pencil"></i></button>
                      </div>
                    </td>
                  </tr>';
                  }
                }?>

        </tbody>
       </table>
      </div>
    </div>
  </section>
</div>







<!--=====================================
MODAL AGREGAR ACCION
======================================-->

<div id="modalAgregarAccion" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Accion</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA AGREGAR ACCION -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" id="idAccion" name="idAccion" value="" readonly>

              </div>

            </div>

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>


                <input type="text" class="form-control input-lg" id="nuevaAccion" name="nuevaAccion" value="" required>

              </div>

            </div>


          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Agregar Accion</button>

        </div>


     <?php

     $crearAlerta = new ControladorAgregarAlertas();
     $crearAlerta -> ctrAgregarAlerta();

        ?>

      </form>

    </div>

  </div>

</div>
