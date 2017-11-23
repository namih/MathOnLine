<style type="text/css" media="screen">
	.chart {
		width: 100%; 
		min-height: 450px;
	}
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {packages: ['corechart', 'bar']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawMultSeries);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawMultSeries() {
      var data = google.visualization.arrayToDataTable([
        ['Tutorial', 'Cursado', 'Sin cursar'],
        ['Números', 8175000, 8008000],
        ['Álgebra', 3792000, 3694000],
        ['Geometria y trigonometria', 2695000, 2896000],
        ['Geometría analítica', 2099000, 1953000],
      ]);

        // Set chart options
        var options = {
        	title: 'Tutoriales',
        	hAxis: {title: 'Número de cursos', titleTextStyle: {color: 'red'}}
        };


        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
      }
    </script>


<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-lg-6">
		<h3>Mejores evaluaciones</h3><br />
		<table class="table">
			<thead>
				<tr>
					<th></th>
					<th>Fecha</th>
					<th>Tiempo</th>
					<th>Puntuación</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Números</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Álgebra</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Geometria y trigonometria</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Geometría analítica</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="chart_div" class="col-xs-12 col-sm-12 col-lg-6">
		<div class="chart">
		  
		</div>
	</div>
</div>