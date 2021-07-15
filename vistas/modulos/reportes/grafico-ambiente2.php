<?php
require_once('modelos/cn.php');
$sql = "SELECT fecha,hora, AVG(valor) FROM refrigeracion GROUP BY fecha";
$result = mysqli_query($mysqli, $sql);
$chart_data = '';

while ($row = mysqli_fetch_array($result)) {
  $chart_data .="{ fecha: '".$row["fecha"]."', valor: ".$row["AVG(valor)"]."} ,";
}

$chart_data = substr($chart_data, 0, -2);
?>

<!--=====================================
GRÁFICO DE VENTAS
======================================-->

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Grafico Ambiente 2</h3>

    <div class="box-tools pull-right">
    </div>
  </div>
  <div class="box-body chart-responsive">
    <div class="chart" id="revenue-chart" style="height: 250px;"></div>
  </div>
  <!-- /.box-body -->
</div>

<script>
var area = new Morris.Area({
  element: 'revenue-chart',
  resize: true,
  data: [<?php echo $chart_data; ?>],
  xkey: 'fecha',
  ykeys: ['valor'],
  labels: ['valor'],
  lineColors: ['#3c8dbc'],
  hideHover: 'auto'
});
</script>
