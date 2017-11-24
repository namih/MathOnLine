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
        ['Números', 25, 5],
        ['Álgebra', 12, 0],
        ['Geometria y trigonometria', 22, 10],
        ['Geometría analítica', 0, 15],
      ]);

        // Set chart options
        var options = {
        	hAxis: {title: 'Número de cursos', titleTextStyle: {color: 'red'}}
        };


        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
      }
      $(window).resize(function(){
      	drawMultSeries();
      	});
    </script>


<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-lg-6">
		<h3>Evaluaciones</h3><br />
		<div class="col-xs-6 col-sm-6 col-lg-6">
			<img width="75%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/ligas/liga_<?php echo $user_log[0]['league']; ?>.png" alt="Liga <?php echo $user_log[0]['league']; ?>" title="Liga <?php echo $user_log[0]['league']; ?>" align="absmiddle">
			<label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="font-size: 25px; color: #7f7e7e; "> <?php echo $user_log[0]['total_score']; ?> puntos</label>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-12">
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
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-6">
		<h3>Tutoriales</h3><br />
		<div class="chart" id="chart_div">
		  
		</div>
	</div>
</div>