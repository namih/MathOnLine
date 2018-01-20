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
        ['Números', <?php echo $end_tuto['num'] ?>, <?php echo ($count_tuto['num'] - $end_tuto['num']) ?>],
        ['Álgebra', <?php echo $end_tuto['algebra'] ?>, <?php echo ($count_tuto['algebra'] - $end_tuto['algebra']) ?>],
        ['Geometria y trigonometria', <?php echo $end_tuto['geo_tri'] ?>, <?php echo ($count_tuto['geo_tri'] - $end_tuto['geo_tri']) ?>],
        ['Geometría analítica', <?php echo $end_tuto['geo_ana'] ?>, <?php echo ($count_tuto['geo_ana'] - $end_tuto['geo_ana']) ?>],
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
						<td>
							<?php
								if (isset($best_evaluation['num']['evaluation_date'] )) {
									echo $best_evaluation['num']['evaluation_date'] ;
								} else {
									echo 'NA';
								}
							?>
						</td>
						<td>
							<?php
								if (isset($best_evaluation['num']['time_finish'])) {
									$horas = floor($best_evaluation['num']['time_finish']/3600);
									$minutos = floor(($best_evaluation['num']['time_finish']-($horas*3600))/60);
									$segundos = $best_evaluation['num']['time_finish']-($horas*3600)-($minutos*60);
									echo $horas.'h:'.$minutos.'m:'.$segundos.'s';
								} else {
									echo 'NA';
								}
							?>
						</td>
						<td>
							<?php
							if (isset($best_evaluation['num']['score'])) {
								echo $best_evaluation['num']['score'];
							} else {
								echo 'NA';
							}
							?>
						</td>
					</tr>
					<tr>
						<td>Álgebra</td>
							<td>
								<?php
									if (isset($best_evaluation['algebra']['evaluation_date'] )) {
										echo $best_evaluation['algebra']['evaluation_date'] ;
									} else {
										echo 'NA';
									}
								?>
							</td>
							<td>
								<?php
									if (isset($best_evaluation['algebra']['time_finish'])) {
										$horas = floor($best_evaluation['algebra']['time_finish']/3600);
										$minutos = floor(($best_evaluation['algebra']['time_finish']-($horas*3600))/60);
										$segundos = $best_evaluation['algebra']['time_finish']-($horas*3600)-($minutos*60);
										echo $horas.'h:'.$minutos.'m:'.$segundos.'s';
									} else {
										echo 'NA';
									}
								?>
							</td>
							<td>
								<?php
								if (isset($best_evaluation['algebra']['score'])) {
									echo $best_evaluation['algebra']['score'];
								} else {
									echo 'NA';
								}
								?>
							</td>
					</tr>
					<tr>
						<td>Geometria y trigonometria</td>
						<td>
							<?php
								if (isset($best_evaluation['geo_tri']['evaluation_date'] )) {
									echo $best_evaluation['geo_tri']['evaluation_date'] ;
								} else {
									echo 'NA';
								}
							?>
						</td>
						<td>
							<?php
								if (isset($best_evaluation['geo_tri']['time_finish'])) {
									$horas = floor($best_evaluation['geo_tri']['time_finish']/3600);
									$minutos = floor(($best_evaluation['geo_tri']['time_finish']-($horas*3600))/60);
									$segundos = $best_evaluation['geo_tri']['time_finish']-($horas*3600)-($minutos*60);
									echo $horas.'h:'.$minutos.'m:'.$segundos.'s';
								} else {
									echo 'NA';
								}
							?>
						</td>
						<td>
							<?php
							if (isset($best_evaluation['geo_tri']['score'])) {
								echo $best_evaluation['geo_tri']['score'];
							} else {
								echo 'NA';
							}
							?>
						</td>
					</tr>
					<tr>
						<td>Geometría analítica</td>
						<td>
							<?php
								if (isset($best_evaluation['geo_ana']['evaluation_date'] )) {
									echo $best_evaluation['geo_ana']['evaluation_date'] ;
								} else {
									echo 'NA';
								}
							?>
						</td>
						<td>
							<?php
								if (isset($best_evaluation['geo_ana']['time_finish'])) {
									$horas = floor($best_evaluation['geo_ana']['time_finish']/3600);
									$minutos = floor(($best_evaluation['geo_ana']['time_finish']-($horas*3600))/60);
									$segundos = $best_evaluation['geo_ana']['time_finish']-($horas*3600)-($minutos*60);
									echo $horas.'h:'.$minutos.'m:'.$segundos.'s';
								} else {
									echo 'NA';
								}
							?>
						</td>
						<td>
							<?php
							if (isset($best_evaluation['geo_ana']['score'])) {
								echo $best_evaluation['geo_ana']['score'];
							} else {
								echo 'NA';
							}
							?>
						</td>
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