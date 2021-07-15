<?php
require_once('modelos/cn.php');
//$sql = "SELECT fecha,hora, AVG(valor) FROM refrigeracion GROUP BY fecha";
$sql = "SELECT fecha,hora,valor FROM refrigeracion GROUP BY fecha";
$result = mysqli_query($mysqli, $sql);
$chart_data = '';

while ($row = mysqli_fetch_array($result)) {
  $chart_data .="{ fecha: '".$row["fecha"]."', valor: ".$row["valor"]."} ,";
}

$chart_data = substr($chart_data, 0, -2);
?>

<!--=====================================
GRÁFICO DE LACTEOS
======================================-->

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Grafico Ambiente 3</h3>

    <div class="box-tools pull-right">
    </div>
  </div>
  <div class="box-body chart-responsive">
    <div class="chart" id="line-chart" style="height: 250px;"></div>
  </div>
  <!-- /.box-body -->
</div>


<script>

var line = new Morris.Line({
  element: 'line-chart',
  resize: true,
  data: [<?php echo $chart_data; ?>],
  xkey: 'fecha',
  ykeys: ['valor'],
  labels: ['valor'],
  lineColors: ['#3c8dbc'],
  hideHover: 'auto'
});

</script>
