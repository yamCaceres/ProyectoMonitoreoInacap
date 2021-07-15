<?php
require_once('modelos/cn.php');
$sql = "SELECT id,fecha,hora, valor FROM refrigeracion GROUP BY fecha";
$result = mysqli_query($mysqli, $sql);
$chart_data = '';

while ($row = mysqli_fetch_array($result)) {
  $chart_data .="{ fecha: '".$row["fecha"]."', valor: '".$row["valor"]."', hora:'".$row["hora"]."'}, ";
}

$chart_data = substr($chart_data, 0, -2);
?>

<!--=====================================
GRÁFICO DE VENTAS
======================================-->


<div class="box box-solid bg-teal-gradient">

	<div class="box-header">

 		<i class="fa fa-th"></i>

  		<h3 class="box-title">Grafico Ambiente 1</h3>

	</div>

	<div class="box-body border-radius-none nuevoGraficoVentas">

		<div class="chart" id="line-chart-ventas" style="height: 250px;"></div>

  </div>

</div>

<script>

var line = new Morris.Line({
  element          : 'line-chart-ventas',
  resize           : true,
  data             : [<?php echo $chart_data; ?>],
  xkey             : 'fecha',
  ykeys            : ['valor'],
  labels           : ['valor'],
  lineColors       : ['#efefef'],
  lineWidth        : 2,
  hideHover        : 'auto',
  gridTextColor    : '#fff',
  gridStrokeWidth  : 0.4,
  pointSize        : 4,
  pointStrokeColors: ['#efefef'],
  gridLineColor    : '#efefef',
  gridTextFamily   : 'Open Sans',
  gridTextSize     : 10
});

</script>
